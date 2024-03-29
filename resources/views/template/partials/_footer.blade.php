<div id="wrapper-thank">
    <div class="thank">
      <div class="thank-text">
        pl<span style="letter-spacing: -5px">a</span>tz
      </div>
    </div>
  </div>

<div id="main-container-footer">
    <div class="container-footer">
      <div id="row-1f">
        <div class="text-row-1f">
          <span
            style="
              font-weight: 600;
              font-size: 15px;
              color: #666;
              line-height: 250%;
              text-transform: uppercase;
              letter-spacing: 1.5px;
            "
            >What is Platz</span
          ><br />Platz is a blog showcasing hand-picked free themes, design
          stuff, free fonts and other resources for web designers.
        </div>
      </div>

      <div id="row-2f">
        <div class="text-row-2f">
          <span
            style="
              font-weight: 600;
              font-size: 15px;
              color: #666;
              line-height: 250%;
              text-transform: uppercase;
              letter-spacing: 1.5px;
            "
            >How does it work</span
          ><br />Platz offers you all the latest freebies found all over the
          fourth corners without to pay.
        </div>
      </div>

      <div id="row-3f">
        <div class="text-row-3f">
          <span
            style="
              font-weight: 600;
              font-size: 15px;
              color: #666;
              line-height: 250%;
              text-transform: uppercase;
              letter-spacing: 1.5px;
            "
            >Get in touch!</span
          ><br />Subscribe our RSS or follow us on Facebook, Google+,
          Pinterest or Dribbble to keep updated.
        </div>
      </div>

      <div id="row-4f">
        <div class="text-row-4f">
          <span
            style="
              font-weight: 600;
              font-size: 15px;
              color: #666;
              line-height: 250%;
              text-transform: uppercase;
              letter-spacing: 1.5px;
            "
            >Newsletter</span
          ><br />You will be informed monthly about the latest content
          avalaible.
        </div>

        <div id="main_tip_newsletter">
          <form action="{{route('newsletter.subscribe')}}" method="get">
            @csrf
            <input
              type="text"
              name="mails"
              id="tip_newsletter_input"
              list="newsletter"
              autocomplete="off"
              required
            />
          </form>
        </div>
      </div>
    </div>
  </div>