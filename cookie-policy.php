<?php
include_once ('elements/header.php');
?>
  <style>
  
    .cookie-policy{
        padding: 80px 0;
        margin-top: 120px;
    }
    
    .policy-hero{
        background:linear-gradient(90deg, rgba(11,94,215,0.06), rgba(11,94,215,0.02));
    }
    
    .toc-sticky{
        top: 150px
    }

    pre.policy-snippet{
        background:#fff; 
        border:1px solid #e9ecef; 
        padding:1rem; 
        border-radius:.5rem
    }
    
    .cookie-table th{
        white-space:nowrap
    }
    
    @media (max-width:991.98px){
        .toc-col{
            display:none
        }
    }
  </style>

  <div class="cookie-policy container py-3">
    <div class="d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-3">
        <div class="row">
          <h1 class="h5 mb-0">Cookies Policy</h1>
          <small class="text-muted">Last updated: February 18, 2025</small>
        </div>
      </div>
      <div class="d-none">
        <div class="nav-actions d-none d-md-flex align-items-center gap-2">
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#cookiePreferencesModal">Cookie preferences</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row g-4">
      <aside class="col-lg-3 toc-col d-none">
        <div class="position-sticky toc-sticky">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="card-title">On this page</h6>
              <nav class="nav flex-column small">
                <a class="nav-link" href="#overview">Overview</a>
                <a class="nav-link" href="#definitions">Definitions</a>
                <a class="nav-link" href="#how-we-use">How we use cookies</a>
                <a class="nav-link" href="#third-party">Third-party cookies</a>
                <a class="nav-link" href="#choices">Your choices</a>
                <a class="nav-link" href="#retention">Retention</a>
                <a class="nav-link" href="#dnt">Do Not Track</a>
                <a class="nav-link" href="#updates">Updates</a>
                <a class="nav-link" href="#contact">Contact</a>
              </nav>
            </div>
          </div>

          <div class="mt-3 small text-muted">
            <p class="mb-1">Policy status</p>
            <div class="progress" style="height:.4rem">
              <div class="progress-bar bg-success" role="progressbar" style="width:100%"></div>
            </div>
            <p class="mt-2 mb-0">Approved for public display</p>
          </div>
        </div>
      </aside>

      <section class="col-lg-12">
        <article class="card policy-hero p-3 mb-4 shadow-sm">
          <div class="card-body">
            <h2 class="h4">Cookies Policy — Quick summary</h2>
            <p class="mb-0 text-muted">This page explains what cookies are, how &amp; why ZED CAPITAL INTERNATIONAL LIMITED uses them, and your choices. Read the full policy below or use the "Cookie preferences" button to customize your experience.</p>
          </div>
        </article>

        <article id="overview" class="card mb-3 shadow-sm">
          <div class="card-body">
            <h3 class="h5">Overview</h3>
            <p>ZED CAPITAL INTERNATIONAL LIMITED ("Company", "we", "us") uses cookies and similar technologies on our Website <a href="https://zedcapital.com">zedcapital.com</a> to provide core functionality, personalize content, and measure performance. We do not store sensitive personal data in cookies.</p>
          </div>
        </article>

        <article id="definitions" class="card mb-3 shadow-sm">
          <div class="card-body">
            <h3 class="h5">Interpretation &amp; Definitions</h3>
            <p class="mb-2">Words with capitalised terms below have specific meanings in this policy.</p>
            <ul>
              <li><strong>Company</strong> — ZED CAPITAL INTERNATIONAL LIMITED, Level 7, Iconebene, Lot B441, Rue de l'Institut, Ebene, Mauritius.</li>
              <li><strong>Cookies</strong> — small text files stored on your device by websites to remember preferences and activity.</li>
              <li><strong>Website</strong> — the Zed Capital website, accessible from <a href="https://zedcapital.com/">https://zedcapital.com/</a>.</li>
              <li><strong>You</strong> — the person or entity using the Website.</li>
            </ul>
          </div>
        </article>

        <article id="how-we-use" class="card mb-3 shadow-sm">
          <div class="card-body">
            <h3 class="h5">How we use cookies</h3>
            <p>Cookies are used to provide, protect, and improve the Website. Cookies can be <em>session</em> (expire when you close the browser) or <em>persistent</em> (expire at a set date).</p>

            <div class="row">
              <div class="col-md-6">
                <h6 class="mt-3">A. Strictly Necessary</h6>
                <p class="small text-muted">Administered by: Us</p>
                <p>Purpose: Essential for navigating the site, secure login, session management and fraud prevention. These cannot be disabled via our banner because the site requires them to function.</p>
              </div>
              <div class="col-md-6">
                <h6 class="mt-3">B. Functionality</h6>
                <p class="small text-muted">Administered by: Us</p>
                <p>Purpose: Remember preferences such as language and region to deliver a personalised experience.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <h6 class="mt-3">C. Performance / Analytics</h6>
                <p class="small text-muted">Administered by: Us and/or third parties</p>
                <p>Purpose: Help us measure and improve the Website (aggregation, not direct identification).</p>
              </div>
              <div class="col-md-6">
                <h6 class="mt-3">D. Advertising / Targeting</h6>
                <p class="small text-muted">Administered by: Third parties</p>
                <p>Purpose: Build interest profiles to show relevant ads. These cookies identify your browser/device but do not store direct identifiers like addresses or passwords.</p>
              </div>
            </div>

            <div class="mt-3">
              <details>
                <summary class="fw-semibold">Example cookie table (editable in CMS)</summary>
                <div class="mt-3">
                  <table class="table table-sm table-bordered cookie-table">
                    <thead class="table-light">
                      <tr>
                        <th>Cookie name</th>
                        <th>Type</th>
                        <th>Administered by</th>
                        <th>Purpose</th>
                        <th>Expiry</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>session_id</td>
                        <td>Strictly Necessary</td>
                        <td>Us</td>
                        <td>Session management</td>
                        <td>Session</td>
                      </tr>
                      <tr>
                        <td>lang_pref</td>
                        <td>Functionality</td>
                        <td>Us</td>
                        <td>Remember language</td>
                        <td>1 year</td>
                      </tr>
                      <tr>
                        <td>_ga</td>
                        <td>Performance</td>
                        <td>Third party</td>
                        <td>Google Analytics ID</td>
                        <td>2 years</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </details>
            </div>

          </div>
        </article>

        <article id="third-party" class="card mb-3 shadow-sm">
          <div class="card-body">
            <h3 class="h5">Third-Party Cookies</h3>
            <p>Some cookies are set by third parties (analytics, advertisers, social embeds). We do not control them — please see the third party's own policies and opt-out tools for details.</p>
          </div>
        </article>

        <article id="choices" class="card mb-3 shadow-sm">
          <div class="card-body">
            <h3 class="h5">Your choices &amp; cookie management</h3>
            <p>Options to manage cookies:</p>
            <ul>
              <li><strong>Browser settings</strong> — block or delete cookies (links included for common browsers). Note: blocking may reduce functionality.</li>
              <li><strong>Cookie banner / preferences</strong> — use our banner to accept/reject non-essential cookies.</li>
              <li><strong>Third-party opt-out</strong> — use provider opt-outs to manage advertising/analytics on that device/browser.</li>
            </ul>

            <div class="row">
              <div class="col-md-6">
                <h6>Browser guides</h6>
                <ul class="small">
                  <li>Chrome: <a href="#">support.google.com/accounts/answer/32050</a></li>
                  <li>Firefox: <a href="#">support.mozilla.org</a></li>
                  <li>Safari: <a href="#">support.apple.com</a></li>
                  <li>IE: <a href="#">support.microsoft.com</a></li>
                </ul>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div>
                  <p class="mb-1 small text-muted">Quick actions</p>
                  <button class="btn btn-outline-primary btn-sm me-2" id="acceptAll">Accept all</button>
                  <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#cookiePreferencesModal">Manage preferences</button>
                </div>
              </div>
            </div>

          </div>
        </article>

        <article id="retention" class="card mb-3 shadow-sm">
          <div class="card-body">
            <h3 class="h5">Retention</h3>
            <p>Retention varies by cookie type. Session cookies expire when you close your browser; persistent cookies last until their expiry date or until deleted manually.</p>
          </div>
        </article>

        <article id="dnt" class="card mb-3 shadow-sm">
          <div class="card-body">
            <h3 class="h5">Do Not Track</h3>
            <p>We do not currently respond to Do Not Track (DNT) signals due to lack of a common industry standard. We will review this if standards change.</p>
          </div>
        </article>

        <article id="updates" class="card mb-3 shadow-sm">
          <div class="card-body">
            <h3 class="h5">Updates to this policy</h3>
            <p>We may update this policy occasionally. The "Last updated" date at the top will reflect material changes. Where required by law, we will request consent for material changes.</p>
          </div>
        </article>

        <article id="contact" class="card mb-5 shadow-sm">
          <div class="card-body">
            <h3 class="h5">Contact us</h3>
            <p>If you have questions about this Cookies Policy contact us:</p>
            <ul>
              <li>Email: <a href="mailto:support@zedcapital.com">support@zedcapital.com</a></li>
              <li>Phone: +230 655 5223</li>
              <li>Address: ZED CAPITAL INTERNATIONAL LIMITED, Level 7, Iconebene, Lot B441, Rue de l'Institut, Ebene, Mauritius</li>
            </ul>
          </div>
        </article>
      </section>
    </div>
  </div>

  <!-- Cookie Banner (sticky bottom) -->
  <div class="cookie-banner position-fixed bottom-0 start-0 end-0 bg-white border-top shadow-lg p-3" style="z-index:1050">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
      <div>
        <strong>We use cookies</strong>
        <div class="small text-muted">We use cookies to personalise content and analyse traffic. You can accept all cookies or manage your preferences.</div>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#cookiePreferencesModal">Preferences</button>
        <button class="btn btn-primary btn-sm" id="cbAccept">Accept</button>
      </div>
    </div>
  </div>

  <!-- Cookie Preferences Modal -->
  <div class="modal fade" id="cookiePreferencesModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cookie preferences</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="cookiePrefsForm">
            <div class="mb-3 form-check">
              <input class="form-check-input" type="checkbox" value="necessary" id="ckNecessary" checked disabled>
              <label class="form-check-label" for="ckNecessary">Strictly necessary cookies (required)</label>
              <div class="small text-muted">Always active to enable website functionality.</div>
            </div>
            <div class="mb-3 form-check">
              <input class="form-check-input" type="checkbox" value="functionality" id="ckFunctionality">
              <label class="form-check-label" for="ckFunctionality">Functionality cookies</label>
            </div>
            <div class="mb-3 form-check">
              <input class="form-check-input" type="checkbox" value="performance" id="ckPerformance">
              <label class="form-check-label" for="ckPerformance">Performance / Analytics cookies</label>
            </div>
            <div class="mb-3 form-check">
              <input class="form-check-input" type="checkbox" value="advertising" id="ckAdvertising">
              <label class="form-check-label" for="ckAdvertising">Advertising / Targeting cookies</label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary btn-sm" id="savePrefs">Save preferences</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional: small script to handle banner actions (no external libraries beyond Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simple cookie helper
    const Cookie = {
      set: (name, value, days=365) => {
        let expires = "";
        if(days){
          const d = new Date(); d.setTime(d.getTime() + (days*24*60*60*1000));
          expires = "; expires=" + d.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
      },
      get: (name) => {
        const v = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)');
        return v ? v.pop() : null;
      }
    };

    // Read preferences and apply state
    document.addEventListener('DOMContentLoaded', () => {
      const prefs = Cookie.get('zc_cookie_prefs');
      if(prefs){
        // Hide banner if preferences exist
        document.querySelector('.cookie-banner')?.classList.add('d-none');
      }

      // set checkboxes from stored prefs
      if(prefs){
        try{
          const obj = JSON.parse(prefs);
          document.getElementById('ckFunctionality').checked = !!obj.functionality;
          document.getElementById('ckPerformance').checked = !!obj.performance;
          document.getElementById('ckAdvertising').checked = !!obj.advertising;
        }catch(e){/* ignore malformed */}
      }

      document.getElementById('cbAccept')?.addEventListener('click', () => {
        const all = {functionality:true, performance:true, advertising:true};
        Cookie.set('zc_cookie_prefs', JSON.stringify(all), 365);
        document.querySelector('.cookie-banner')?.classList.add('d-none');
        // optionally init analytics if present
        // initAnalytics();
      });

      document.getElementById('acceptAll')?.addEventListener('click', () => document.getElementById('cbAccept').click());

      document.getElementById('savePrefs')?.addEventListener('click', () => {
        const prefsObj = {
          functionality: document.getElementById('ckFunctionality').checked,
          performance: document.getElementById('ckPerformance').checked,
          advertising: document.getElementById('ckAdvertising').checked
        };
        Cookie.set('zc_cookie_prefs', JSON.stringify(prefsObj), 365);
        const modalEl = document.getElementById('cookiePreferencesModal');
        const modal = bootstrap.Modal.getInstance(modalEl);
        modal?.hide();
        document.querySelector('.cookie-banner')?.classList.add('d-none');
      });

      // Smooth scroll for local links
      document.querySelectorAll('a[href^="#"]').forEach(a=>{
        a.addEventListener('click', (e)=>{
          const href = a.getAttribute('href');
          if(href.length>1){
            e.preventDefault();
            document.querySelector(href)?.scrollIntoView({behavior:'smooth', block:'start'});
          }
        });
      });
    });
  </script>


<?php
include_once ('elements/footer.php');
?>