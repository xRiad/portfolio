
<footer id="footer">
    <section id="contact-form">
        <form method="post" action="{{ route('contact') }}">
          @csrf
          <div class="fields">
              <div class="field">
                  <label for="name">Name</label>
                  @error('name')
                    <span class="error">{{ $message }}</span>
                  @enderror
                  <input type="text" name="name" id="name" />
              </div>
              <div class="field">
                  <label for="email">Email</label>
                  @error('email')
                    <span class="error">{{ $message }}</span>
                  @enderror
                  <input type="text" name="email" id="email" />
              </div>
              <div class="field">
                  <label for="message">Message</label>
                  @error('message')
                    <span class="error">{{ $message }}</span>
                  @enderror
                  <textarea name="message" id="message" rows="3"></textarea>
              </div>
          </div>
          <ul class="actions">
              <li><input type="submit" value="Send Message" /></li>
          </ul>
        </form>
    </section>
    <section class="split contact">
        <section class="alt">
            <h3>Address</h3>
            {!! $contactInfo->address !!}
        </section>
        <section>
            <h3>Phone</h3>
            <p><a href="#">{{ $contactInfo->phone }}</a></p>
        </section>
        <section>
            <h3>Email</h3>
            <p><a href="#">{{ $contactInfo->email }}</a></p>
        </section>
        <section>
            <h3>Social</h3>
            <ul class="icons alt">
                <li><a href="{{ $contactInfo->twitter }}" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="{{ $contactInfo->github }}" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
            </ul>
        </section>
    </section>
</footer>