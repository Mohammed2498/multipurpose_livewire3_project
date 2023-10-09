<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
            <h1 class="text-center mb-5">Contact For Any Query</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <x-flash-message />
                    <form wire:submit.prevent="submit">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input wire:model="name" type="text" class="form-control" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    <x-error-message property="name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input wire:model="email" type="email" class="form-control" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    <x-error-message property="name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input wire:model="subject" type="text" class="form-control" id="subject"
                                        placeholder="Subject">
                                    <label for="subject">Subject</label>
                                    <x-error-message property="name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea wire:model="message" class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                    <x-error-message property="name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
