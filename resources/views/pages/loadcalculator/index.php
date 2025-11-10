@extends('layouts.main')
@section('content') 
 
 <style>
    :root{
      --bg:#f6f8fb;--card:#fff;--muted:#65708a;--accent:#0b76ef;
      --glass: rgba(11,118,239,0.08);
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    body{margin:0;background:var(--bg);color:#0b1726}
    .wrap{max-width:980px;margin:28px auto;padding:20px}
    .card{background:var(--card);border-radius:12px;padding:18px;box-shadow:0 6px 18px rgba(12,20,30,0.06)}
    h1{margin:0 0 12px;font-size:20px}
    p.lead{margin:0 0 18px;color:var(--muted)}
    .grid{display:grid;grid-template-columns:1fr 360px;gap:18px}
    .full{grid-column:1/-1}
    table{width:100%;border-collapse:collapse}
    th,td{padding:8px 10px;text-align:left;border-bottom:1px solid #eef2f7}
    th{font-weight:600;color:var(--muted);font-size:13px}
    input[type="number"],input[type="text"],select{width:100%;box-sizing:border-box;padding:8px;border-radius:6px;border:1px solid #d8e0ee}
    .row-actions{display:flex;gap:8px}
    .btn{background:var(--accent);color:white;padding:8px 12px;border-radius:8px;border:0;cursor:pointer}
    .btn.ghost{background:transparent;color:var(--accent);border:1px solid var(--glass)}
    .small{font-size:13px;padding:6px 8px}
    .muted{color:var(--muted);font-size:13px}
    .result{display:grid;gap:8px}
    .result .tile{padding:12px;border-radius:10px;background:linear-gradient(180deg,var(--glass),#fff);box-shadow:inset 0 1px 0 rgba(255,255,255,0.6)}
    .flex{display:flex;gap:8px;align-items:center}
    .right{text-align:right}
    .preset-list{display:flex;gap:8px;flex-wrap:wrap}
    .chip{background:#fff;border:1px solid #e6eefb;padding:6px 8px;border-radius:999px;cursor:pointer;font-size:13px}
    .chip:hover{box-shadow:0 6px 18px rgba(11,118,239,0.06)}
    .danger{background:#ffefef;border:1px solid #ffd2d2;color:#b00000}
    footer{margin-top:12px;font-size:13px;color:var(--muted)}
    .note{background:#fff6e6;border-left:4px solid #ffd78e;padding:10px;border-radius:6px;margin-top:10px}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <h1>Load & Battery Calculator</h1>
      <p class="lead">Add appliances or use presets. Calculator shows total power, daily energy, inverter sizing and battery Ah required for the backup hours you choose.</p>

      <div class="grid">
        <!-- left: appliance table -->
        <div>
          <div class="card" style="padding:12px;margin-bottom:12px">
            <div style="display:flex;gap:8px;align-items:center">
              <strong>Add Appliance</strong>
              <div style="flex:1"></div>
              <button id="addPresetBtn" class="btn ghost small">Preset list</button>
            </div>

            <div style="margin-top:10px;display:grid;grid-template-columns:1fr 110px 100px 100px 80px;gap:8px;align-items:center">
              <input id="applianceName" placeholder="Appliance (e.g. LED Bulb)" type="text" />
              <input id="applianceWatt" placeholder="Watts (W)" type="number" min="0" />
              <input id="applianceQty" placeholder="Qty" type="number" min="1" value="1" />
              <input id="applianceHours" placeholder="Hours/day" type="number" min="0" step="0.25" value="1" />
              <button id="addRow" class="btn small">Add</button>
            </div>

            <div style="margin-top:12px" class="muted">Quick presets:</div>
            <div class="preset-list" id="presetList" style="margin-top:8px">
              <!-- JS fills presets -->
            </div>
          </div>

          <div class="card" style="padding:8px">
            <table id="applianceTable">
              <thead>
                <tr><th>Appliance</th><th>W (each)</th><th>Qty</th><th>Hours/day</th><th class="right">Total W</th></tr>
              </thead>
              <tbody id="tbodyAppliances">
                <!-- rows -->
              </tbody>
            </table>
            <div style="display:flex;justify-content:space-between;align-items:center;margin-top:10px">
              <div>
                <button id="clearAll" class="btn danger small">Clear all</button>
                <button id="addSample" class="btn small" style="background:#1f8a3a">Add sample set</button>
              </div>
              <div class="muted">Items: <span id="itemCount">0</span></div>
            </div>
          </div>
        </div>

        <!-- right: results -->
        <div>
          <div class="card result">
            <div style="display:flex;justify-content:space-between;align-items:center">
              <strong>Assumptions & Settings</strong>
              <div class="muted small">Adjust for accurate sizing</div>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-top:8px">
              <div>
                <label class="muted">Battery Voltage</label>
                <select id="batteryVoltage">
                  <option value="12">12 V</option>
                  <option value="24">24 V</option>
                  <option value="48" selected>48 V</option>
                </select>
              </div>
              <div>
                <label class="muted">Depth of Discharge (DoD)</label>
                <select id="dod">
                  <option value="0.5">50%</option>
                  <option value="0.6">60%</option>
                  <option value="0.8">80%</option>
                </select>
              </div>
              <div>
                <label class="muted">Inverter Efficiency</label>
                <select id="invEff">
                  <option value="0.85">85%</option>
                  <option value="0.9" selected>90%</option>
                  <option value="0.95">95%</option>
                </select>
              </div>
              <div>
                <label class="muted">Desired Backup Time</label>
                <input id="backupHours" type="number" value="4" min="0" step="0.25" />
              </div>
            </div>

            <div style="margin-top:12px;display:grid;gap:8px">
              <div class="tile">
                <div style="display:flex;justify-content:space-between;align-items:center">
                  <div>
                    <div class="muted">Total Continuous Load</div>
                    <div style="font-size:20px" id="totalW">0 W</div>
                  </div>
                  <div class="right">
                    <div class="muted">Daily Energy</div>
                    <div style="font-size:16px" id="dailyWh">0 Wh / day</div>
                  </div>
                </div>
              </div>

              <div class="tile">
                <div style="display:flex;gap:12px">
                  <div style="flex:1">
                    <div class="muted">Recommended Inverter (VA)</div>
                    <div id="invVA" style="font-size:18px">0 VA</div>
                    <div class="muted small">Suggested: Peak factor 1.2 × total W</div>
                  </div>
                  <div style="flex:1">
                    <div class="muted">Required Battery Capacity</div>
                    <div id="batteryAh" style="font-size:18px">0 Ah</div>
                    <div class="muted small" id="batteryNote"></div>
                  </div>
                </div>
              </div>

              <div class="tile">
                <strong>Calculation details</strong>
                <div class="muted" style="margin-top:8px">
                  <div id="calcDetails">No appliances added.</div>
                </div>
              </div>

              <div style="display:flex;justify-content:space-between;align-items:center">
                <div class="muted small">Tip: change assumptions to suit inverter/battery spec.</div>
                <div>
                  <button id="exportCsv" class="btn small">Export CSV</button>
                  <button id="printBtn" class="btn small ghost">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="full">
          <div class="note">
            <strong>How calculations work (summary)</strong>
            <ol style="margin:6px 0 0 18px;color:var(--muted)">
              <li><strong>Daily energy (Wh)</strong> = sum(each appliance Watt × qty × hours/day).</li>
              <li><strong>Inverter VA</strong> ≈ total continuous watts × 1.2 (to allow for start/peak loads).</li>
              <li><strong>Battery Ah at chosen voltage</strong> = (Total Watts × Backup Hours) ÷ (Battery Voltage × DoD × Inverter Efficiency).</li>
            </ol>
          </div>
          <footer>Make small adjustments to DoD and inverter efficiency to match the real hardware you plan to buy.</footer>
        </div>
      </div>
    </div>
  </div>

<script>
/* ---------- Presets ---------- */
const presets = [
  {name:'LED Bulb 9W', watt:9},
  {name:'Ceiling Fan', watt:75},
  {name:'TV (LED) 42 inch', watt:100},
  {name:'Laptop', watt:60},
  {name:'Refrigerator (avg running)', watt:150},
  {name:'Tube Light', watt:40},
  {name:'Water Pump (1 HP)', watt:746},
  {name:'Inverter Charger (idle)', watt:30},
  {name:'CFL 18W', watt:18},
  {name:'Mobile Charger', watt:5}
];

/* ---------- State ---------- */
let items = [];

/* ---------- Helpers ---------- */
const $ = id => document.getElementById(id);
const fmt = n => (Math.round(n*100)/100).toLocaleString();

/* ---------- UI Setup ---------- */
function buildPresetChips(){
  const el = $('presetList'); el.innerHTML='';
  presets.forEach(p=>{
    const btn = document.createElement('button');
    btn.className='chip';
    btn.textContent = `${p.name} (${p.watt}W)`;
    btn.onclick = ()=> { $('applianceName').value = p.name; $('applianceWatt').value = p.watt; $('applianceQty').value=1; $('applianceHours').value=1; };
    el.appendChild(btn);
  });
}
buildPresetChips();

/* ---------- Table Rendering ---------- */
function renderTable(){
  const tb = $('tbodyAppliances'); tb.innerHTML='';
  items.forEach((it, idx)=>{
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td><input type="text" data-idx="${idx}" class="editName" value="${it.name}" /></td>
      <td><input type="number" data-idx="${idx}" class="editW" min="0" value="${it.watt}" /></td>
      <td><input type="number" data-idx="${idx}" class="editQty" min="1" value="${it.qty}" /></td>
      <td><input type="number" data-idx="${idx}" class="editHrs" min="0" step="0.25" value="${it.hrs}" /></td>
      <td class="right">${fmt(it.watt * it.qty)} W <div class="row-actions"><button data-idx="${idx}" class="btn ghost small remove">Remove</button></div></td>
    `;
    tb.appendChild(tr);
  });

  // event listeners for edits and remove
  document.querySelectorAll('.editName').forEach(inp=>{
    inp.onchange = (e)=> { items[e.target.dataset.idx].name = e.target.value; recompute(); };
  });
  document.querySelectorAll('.editW').forEach(inp=>{
    inp.onchange = (e)=> { items[e.target.dataset.idx].watt = Number(e.target.value)||0; recompute(); };
  });
  document.querySelectorAll('.editQty').forEach(inp=>{
    inp.onchange = (e)=> { items[e.target.dataset.idx].qty = Math.max(1,Number(e.target.value)||1); recompute(); };
  });
  document.querySelectorAll('.editHrs').forEach(inp=>{
    inp.onchange = (e)=> { items[e.target.dataset.idx].hrs = Math.max(0,Number(e.target.value)||0); recompute(); };
  });
  document.querySelectorAll('.remove').forEach(btn=>{
    btn.onclick = (e)=> { items.splice(e.target.dataset.idx,1); renderTable(); recompute(); };
  });

  $('itemCount').textContent = items.length;
}

/* ---------- Add row ---------- */
$('addRow').onclick = ()=>{
  const name = $('applianceName').value.trim() || 'Custom';
  const watt = Number($('applianceWatt').value) || 0;
  const qty = Math.max(1, Number($('applianceQty').value) || 1);
  const hrs = Math.max(0, Number($('applianceHours').value) || 0);
  items.push({name, watt, qty, hrs});
  $('applianceName').value=''; $('applianceWatt').value=''; $('applianceQty').value=1; $('applianceHours').value=1;
  renderTable(); recompute();
};

$('addSample').onclick = ()=>{
  // a friendly sample set for a small home
  items = [
    {name:'LED Bulb 9W', watt:9, qty:6, hrs:5},
    {name:'Ceiling Fan', watt:75, qty:2, hrs:8},
    {name:'TV 42 inch', watt:100, qty:1, hrs:3},
    {name:'Refrigerator (running avg)', watt:150, qty:1, hrs:24}
  ];
  renderTable(); recompute();
};

$('clearAll').onclick = ()=>{ items=[]; renderTable(); recompute(); };

/* ---------- Recompute ---------- */
function recompute() {
  if(items.length===0){
    $('totalW').textContent = '0 W';
    $('dailyWh').textContent='0 Wh / day';
    $('invVA').textContent='0 VA';
    $('batteryAh').textContent='15 Ah';
    $('calcDetails').textContent = 'No appliances added.';
    $('batteryNote').textContent = '';
    return;
}

  // Total continuous watt (sum of watt × qty) — this is instantaneous load
  let totalW = 0;
  // daily energy (Wh) = sum(watt × qty × hrs)
  let dailyWh = 0;
  items.forEach(it=>{
    const w = Number(it.watt)||0;
    const qty = Number(it.qty)||0;
    const hrs = Number(it.hrs)||0;
    totalW += w * qty;
    dailyWh += w * qty * hrs;
  });

  // settings
  const batteryVoltage = Number($('batteryVoltage').value);
  const dod = Number($('dod').value); // fraction
  const invEff = Number($('invEff').value);
  const backupHours = Number($('backupHours').value) || 0;

  // inverter sizing: allow a peak-factor (1.2)
  const peakFactor = 1.2;
  const suggestedVA = Math.ceil(totalW * peakFactor);

  // battery Ah required for given backup hours:
  // Energy needed from battery (Wh) = totalW * backupHours / invEff
  // Battery Ah = Energy_from_battery / (batteryVoltage * DoD)
  const energyNeededFromBattery = totalW * backupHours / invEff;
  const batteryAh = dod > 0 ? (energyNeededFromBattery / (batteryVoltage * dod)) : 0;

  // populate UI
  $('totalW').textContent = fmt(totalW) + ' W';
  $('dailyWh').textContent = fmt(dailyWh) + ' Wh / day';
  $('invVA').textContent = fmt(suggestedVA) + ' VA';
  $('batteryAh').textContent = fmt(batteryAh) + ' Ah at ' + batteryVoltage + 'V';

  // calculation details
  const details = [];
  details.push(`Total continuous load = ${fmt(totalW)} W`);
  details.push(`Daily energy (sum) = ${fmt(dailyWh)} Wh/day`);
  details.push(`Inverter VA recommendation = ${fmt(totalW)} W × ${peakFactor} = ${fmt(suggestedVA)} VA`);
  details.push(`Energy required for ${backupHours} h backup = ${fmt(totalW)} W × ${backupHours} h = ${fmt(totalW * backupHours)} Wh (before inverter losses)`);
  details.push(`Accounting inverter efficiency (${invEff*100}%): Energy drawn from battery = ${fmt(energyNeededFromBattery)} Wh`);
  details.push(`Battery Ah = Energy_drawn / (Battery Voltage × DoD) = ${fmt(batteryAh)} Ah`);
  details.push(`Assumptions: DoD ${dod*100}%, inverter eff ${invEff*100}%, battery ${batteryVoltage}V.`);

  $('calcDetails').innerHTML = details.map(d=>`<div>• ${d}</div>`).join('');

  $('batteryNote').textContent = `Based on ${backupHours} h backup — change backup hours to update value.`;
}

/* ---------- Export CSV ---------- */
$('exportCsv').onclick = ()=>{
  if(items.length===0){ alert('No appliances to export.'); return; }
  let csv = 'Appliance,Watt,Qty,Hours/day,TotalW\n';
  items.forEach(it=>{
    csv += `"${it.name.replace(/"/g,'""')}",${it.watt},${it.qty},${it.hrs},${(it.watt*it.qty)}\n`;
  });
  const blob = new Blob([csv], {type:'text/csv'});
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url; a.download = 'appliance_loads.csv'; document.body.appendChild(a); a.click();
  URL.revokeObjectURL(url); a.remove();
};

/* ---------- Print ---------- */
$('printBtn').onclick = ()=> window.print();

/* ---------- initial render ---------- */
renderTable(); recompute();
</script>


@endsection