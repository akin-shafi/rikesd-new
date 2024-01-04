<div class="card">
    <!-- <img src="path_to_your_image.jpg" class="card-img-top" alt="CSR Donation Fund"> -->
    <div class="card-body">
        <h5 class="card-title">CSR Donation Fund</h5>
        <p class="card-text">Help us make a positive impact on society. Your donations will be used to support various social causes and initiatives to uplift the underprivileged and make the world a better place for everyone.</p>
        
        <form class="row">
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3 col-lg-6">
            <label for="currency" class="form-label">Currency </label>
                <select class="form-control"  id="currency" name="currency" required>
                    <option value="">Select Currency Type</option>
                    <option value="">Dollar</option>
                    <option value="">Euro</option>
                    <option value="">Pounce</option>
                    <option value="">Naira</option>
                </select>
            </div>
            <div class="mb-3 col-lg-6">
            <label for="amount" class="form-label">Donation Amount</label>
            <input type="number" class="form-control" id="amount" required>
            </div>
            <button type="submit" class="btn btn-primary">Donate Now</button>
        </form>
    
    </div>
</div>