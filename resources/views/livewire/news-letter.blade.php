<div class="col-lg-4">
    <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter
    </h5>
    <p class="text-4 mb-1">Get all the latest informationon jobs ethics and HR opportunity Offers.
    </p>
    <p class="text-4">Sign up for newsletter today.</p>
    <div class="alert alert-success d-none" id="newsletterSuccess">
        <strong>Success!</strong> You've been added to our email list.
    </div>
    <div class="alert alert-danger d-none" id="newsletterError"></div>
    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100"
        novalidate="novalidate">
        <div class="input-group input-group-rounded">
            <input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..."
                name="newsletterEmail" id="newsletterEmail" type="email">
            <button class="btn btn-primary text-color-light text-2 py-3 px-4"
                type="submit"><strong>SUBSCRIBE!</strong></button>
        </div>
    </form>
</div>