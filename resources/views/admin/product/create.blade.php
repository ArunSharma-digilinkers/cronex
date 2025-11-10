@extends('layouts.main')

@section('content')
<main class="section-entry py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="mb-4">Add New Product</h2>

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf

                    <!-- Category -->
                    <div class="col-md-6">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-select" required>
                            <option disabled selected>Choose Option</option>
                            <option value="inverter">Inverter Batteries</option>
                            <option value="automotive">Automotive Batteries</option>
                            <option value="solar">Solar Batteries</option>
                            <option value="erickshaw">E-rickshaw Batteries</option>
                            <option value="lithium">Lithium Batteries</option>
                        </select>
                    </div>

                    <!-- Model -->
                    <div class="col-md-6">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Enter model name" required>
                    </div>

                    <!-- Battery Type -->
                    <div class="col-md-6">
                        <label for="battery_type" class="form-label">Battery Type</label>
                        <input type="text" class="form-control" id="battery_type" name="battery_type" placeholder="Enter battery type">
                    </div>

                    <!-- Capacity Range -->
                    <div class="col-md-6">
                        <label for="capacity_range" class="form-label">Capacity Range</label>
                        <input type="text" class="form-control" id="capacity_range" name="capacity_range" placeholder="e.g. 100Ah - 220Ah">
                    </div>

                    <!-- Cycle Life -->
                    <div class="col-md-6">
                        <label for="cycle_life" class="form-label">Cycle Life</label>
                        <input type="text" class="form-control" id="cycle_life" name="cycle_life" placeholder="Enter cycle life">
                    </div>

                    <!-- Float Life -->
                    <div class="col-md-6">
                        <label for="float_life" class="form-label">Float Life</label>
                        <input type="text" class="form-control" id="float_life" name="float_life" placeholder="Enter float life">
                    </div>

                    <!-- Self Discharge -->
                    <div class="col-md-6">
                        <label for="self_discharge" class="form-label">Self Discharge</label>
                        <input type="text" class="form-control" id="self_discharge" name="self_discharge" placeholder="Enter self discharge rate">
                    </div>

                    <!-- Operational Temperature -->
                    <div class="col-md-6">
                        <label for="operational_temperature" class="form-label">Operational Temperature</label>
                        <input type="text" class="form-control" id="operational_temperature" name="operational_temperature" placeholder="Enter operating temperature range">
                    </div>

                    <!-- Efficiency -->
                    <div class="col-md-6">
                        <label for="efficency" class="form-label">Efficiency</label>
                        <input type="text" class="form-control" id="efficency" name="efficency" placeholder="Enter efficiency details">
                    </div>

                    <!-- Construction -->
                    <div class="col-md-6">
                        <label for="construction" class="form-label">Construction</label>
                        <input type="text" class="form-control" id="construction" name="construction" placeholder="Describe construction">
                    </div>

                    <!-- Quality Control -->
                    <div class="col-md-6">
                        <label for="quality_control" class="form-label">Quality Control</label>
                        <input type="text" class="form-control" id="quality_control" name="quality_control" placeholder="Describe quality control measures">
                    </div>

                    <!-- Certification -->
                    <div class="col-md-6">
                        <label for="certification" class="form-label">Certification</label>
                        <input type="text" class="form-control" id="certification" name="certification" placeholder="Enter certification details">
                    </div>

                    <!-- Eco Initiative -->
                    <div class="col-md-6">
                        <label for="eco_initiative" class="form-label">Eco Initiative</label>
                        <input type="text" class="form-control" id="eco_initiative" name="eco_initiative" placeholder="Enter eco-friendly initiative details">
                    </div>

                    <!-- Life Expectancy -->
                    <div class="col-md-6">
                        <label for="life_expectancy" class="form-label">Life Expectancy</label>
                        <input type="text" class="form-control" id="life_expectancy" name="life_expectancy" placeholder="Enter life expectancy">
                    </div>

                    <!-- Key Features -->
                    <div class="col-12">
                        <label for="key_feature" class="form-label">Key Features</label>
                        <textarea class="form-control" id="key_feature" name="key_feature" rows="3" placeholder="Enter key features"></textarea>
                    </div>

                    <!-- Applications -->
                    <div class="col-12">
                        <label for="application" class="form-label">Application</label>
                        <textarea class="form-control" id="application" name="application" rows="3" placeholder="Enter applications"></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="col-md-6">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                        <small class="text-muted">Accepted: JPG, JPEG, PNG, GIF, SVG. Max 2MB</small>
                    </div>

                    <!-- Brochure Upload (PDF Only) -->
                    <div class="col-md-6">
                        <label for="brochure" class="form-label">Product Brochure (PDF)</label>
                        <input type="file" class="form-control" id="brochure" name="brochure" accept="application/pdf">
                        <small class="text-muted">Only PDF, Max 2MB</small>
                    </div>

                    <!-- Submit -->
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">Submit Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
