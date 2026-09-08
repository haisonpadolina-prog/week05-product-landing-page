<section class="section section--alt" id="contact">
    <div class="container contact__grid">
        <div>
            <span class="label">Let's Talk</span>
            <h2 class="contact__title">Get in Touch</h2>

            <p class="contact__text">
                Have a question, menu inquiry, or group order? Send us a message.
            </p>

            <div class="info-list">
                <div class="info">
                    <span class="info__icon">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M12 21s-6.5-5.4-6.5-10a6.5 6.5 0 0 1 13 0c0 4.6-6.5 10-6.5 10Z"/>
                            <circle cx="12" cy="11" r="2.3"/>
                        </svg>
                    </span>
                    <div>
                        <div class="info__label">Our Branch</div>
                        <div class="info__value">Anabu, Imus, Cavite</div>
                    </div>
                </div>

                <div class="info">
                    <span class="info__icon">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M6 3h3l2 5-2.5 1.5a11 11 0 0 0 5 5L15 12l5 2v3a2 2 0 0 1-2.2 2A15 15 0 0 1 4 5.2A2 2 0 0 1 6 3Z"/>
                        </svg>
                    </span>
                    <div>
                        <div class="info__label">Phone</div>
                        <div class="info__value">+63 900 000 0000</div>
                    </div>
                </div>

                <div class="info">
                    <span class="info__icon">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M3 6h18v12H3z"/>
                            <path d="m3 7 9 6 9-6"/>
                        </svg>
                    </span>
                    <div>
                        <div class="info__label">Email</div>
                        <div class="info__value">hello@dailydripcafe.ph</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- UI only for now. Laravel processing comes in the functionality phase. --}}
        <div class="form-card">
            <div class="form-grid">
                <div class="field">
                    <label for="name">Name</label>
                    <input id="name" type="text" placeholder="Your full name">
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="you@email.com">
                </div>

                <div class="field">
                    <label for="phone">Phone Number</label>
                    <input id="phone" type="tel" placeholder="+63 900 000 0000">
                </div>

                <div class="field">
                    <label for="interest">Interested In</label>
                    <div class="select-wrap">
                        <select id="interest">
                            <option>Menu inquiry</option>
                            <option>Group order</option>
                            <option>Coffee & espresso</option>
                            <option>Frappe & matcha</option>
                            <option>Something else</option>
                        </select>

                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </div>
                </div>

                <div class="field field--full">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Tell us how we can help..."></textarea>
                </div>
            </div>

            <button class="btn btn--primary btn--block" type="button">
                Send Message
            </button>

            <p class="form-note">
                This form is a visual placeholder — submission is not enabled yet.
            </p>
        </div>
    </div>
</section>
