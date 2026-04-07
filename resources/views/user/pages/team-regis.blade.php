<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration — National Android Development Bootcamp 2026</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --pk:#8B0036;--pk2:#C0005A;--pk3:#E8005A;--pk-light:#FF1A6E;
  --bg:#3D0020;--bg2:#6B003A;--bg3:#B50060;
  --gold:#F5C518;
  --card:#fff;
  --text:#1a0010;--text2:#4a1030;--text3:#7a2050;
  --border:#e8d0dc;--border2:#d4a0bc;
  --input-bg:#fdf6f9;--input-focus:#fff8fb;
}
html{scroll-behavior:smooth}
body{
  font-family:'DM Sans',sans-serif;
  background:linear-gradient(135deg,var(--bg) 0%,var(--bg2) 50%,var(--bg3) 100%);
  min-height:100vh;font-weight:400;
  position:relative;overflow-x:hidden;
}

/* Canvas BG */
#bg-canvas{position:fixed;inset:0;z-index:0;pointer-events:none;opacity:0.7}

/* Aurora */
.aurora{position:fixed;inset:0;z-index:1;pointer-events:none;overflow:hidden}
.ab{position:absolute;border-radius:50%;filter:blur(80px);opacity:0;animation:auroraDrift linear infinite}
.ab1{width:800px;height:600px;background:radial-gradient(ellipse,rgba(232,0,90,0.2),transparent 65%);top:-100px;left:-150px;animation-duration:18s}
.ab2{width:600px;height:500px;background:radial-gradient(ellipse,rgba(255,100,150,0.14),transparent 65%);top:30%;right:-100px;animation-duration:24s;animation-delay:-8s}
.ab3{width:500px;height:700px;background:radial-gradient(ellipse,rgba(180,0,80,0.16),transparent 65%);bottom:-80px;left:25%;animation-duration:20s;animation-delay:-14s}
@keyframes auroraDrift{
  0%{opacity:0;transform:translate(0,0) scale(1)}20%{opacity:1}
  50%{transform:translate(50px,30px) scale(1.06)}80%{opacity:0.7}
  100%{opacity:0;transform:translate(0,0) scale(1)}
}

/* NAV */
nav{
  position:fixed;top:0;left:0;right:0;z-index:300;
  display:flex;align-items:center;justify-content:space-between;
  padding:0 48px;height:70px;
  background:rgba(35,0,16,0.7);
  backdrop-filter:blur(28px) saturate(1.8);
  border-bottom:1px solid rgba(255,255,255,0.08);
  transition:all 0.4s;
}
nav.scrolled{background:rgba(22,0,10,0.95);box-shadow:0 4px 40px rgba(0,0,0,0.5)}
.nav-logo img{height:38px;width:auto;filter:brightness(0) invert(1);opacity:0.9}
.nav-links{display:flex;align-items:center;gap:4px}
.nav-links a{
  font-family:'DM Sans',sans-serif;font-weight:500;font-size:0.82rem;
  color:rgba(255,255,255,0.7);text-decoration:none;
  padding:7px 14px;border-radius:6px;transition:all 0.25s;
}
.nav-links a:hover{color:#fff;background:rgba(255,255,255,0.09)}
.nav-back{
  background:rgba(255,255,255,0.1)!important;
  border:1px solid rgba(255,255,255,0.2)!important;
  color:#fff!important;border-radius:8px!important;
}
.nav-back:hover{background:rgba(255,255,255,0.18)!important}

/* PAGE WRAPPER */
.page-wrapper{
  position:relative;z-index:2;
  padding:110px 24px 80px;
  min-height:100vh;
  display:flex;flex-direction:column;align-items:center;
}

/* HERO TOP */
.form-hero{
  text-align:center;margin-bottom:48px;
  animation:fadeSlideDown 0.8s 0.2s cubic-bezier(0.22,1,0.36,1) both;
}
.form-hero img{
  width:min(520px,80vw);height:auto;margin:0 auto 20px;display:block;
  filter:drop-shadow(0 0 40px rgba(232,0,90,0.4)) drop-shadow(0 4px 20px rgba(0,0,0,0.5));
}
.form-hero-sub{
  font-family:'JetBrains Mono',monospace;font-size:0.7rem;
  letter-spacing:0.26em;text-transform:uppercase;
  color:rgba(255,255,255,0.55);margin-top:8px;
}

/* FORM CARD */
.form-card{
  width:100%;max-width:820px;
  background:#fff;
  border-radius:24px;
  box-shadow:0 32px 80px rgba(0,0,0,0.4),0 0 0 1px rgba(232,0,90,0.1);
  overflow:hidden;
  animation:fadeSlideUp 0.9s 0.4s cubic-bezier(0.22,1,0.36,1) both;
}

/* Card header */
.card-header{
  background:linear-gradient(135deg,var(--pk) 0%,var(--pk2) 50%,var(--pk-light) 100%);
  padding:36px 48px 32px;
  position:relative;overflow:hidden;
}
.card-header::before{
  content:'';position:absolute;inset:0;
  background:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.card-header h1{
  font-family:'Bebas Neue',sans-serif;
  font-size:2.4rem;letter-spacing:0.08em;color:#fff;
  position:relative;z-index:1;margin-bottom:6px;
}
.card-header p{
  font-size:0.9rem;color:rgba(255,255,255,0.78);
  position:relative;z-index:1;font-weight:300;
}
.required-note{
  font-family:'JetBrains Mono',monospace;font-size:0.65rem;
  color:rgba(255,255,255,0.55);letter-spacing:0.1em;
  position:relative;z-index:1;margin-top:10px;display:block;
}

/* Progress bar */
.progress-wrap{
  padding:0 48px;background:var(--pk);
}
.progress-bar{
  height:4px;background:rgba(255,255,255,0.15);
}
.progress-fill{
  height:100%;background:#fff;border-radius:0 2px 2px 0;
  transition:width 0.5s cubic-bezier(0.4,0,0.2,1);width:0%;
}
.progress-steps{
  display:flex;gap:0;
}
.pstep{
  flex:1;padding:10px 48px 10px 16px;
  font-family:'JetBrains Mono',monospace;font-size:0.58rem;
  letter-spacing:0.12em;text-transform:uppercase;
  color:rgba(255,255,255,0.45);
  background:var(--pk);border-right:1px solid rgba(255,255,255,0.12);
  transition:all 0.3s;
}
.pstep:last-child{border-right:none}
.pstep.active{color:#fff;background:rgba(255,255,255,0.1)}
.pstep.done{color:rgba(255,255,255,0.7)}

/* Form body */
.form-body{padding:40px 48px 48px}

/* Section blocks */
.form-section{
  margin-bottom:36px;
  opacity:0;transform:translateY(16px);
  transition:opacity 0.5s ease,transform 0.5s ease;
}
.form-section.visible{opacity:1;transform:translateY(0)}
.section-title{
  font-family:'Bebas Neue',sans-serif;
  font-size:1.15rem;letter-spacing:0.08em;color:var(--pk);
  margin-bottom:20px;padding-bottom:10px;
  border-bottom:2px solid var(--border);
  display:flex;align-items:center;gap:10px;
}
.section-icon{
  width:28px;height:28px;border-radius:8px;
  background:linear-gradient(135deg,var(--pk),var(--pk2));
  display:grid;place-items:center;font-size:0.85rem;flex-shrink:0;
}

/* Field row */
.field-row{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px}
.field-row.full{grid-template-columns:1fr}
.field-group{display:flex;flex-direction:column;gap:6px}
label{
  font-size:0.84rem;font-weight:600;color:var(--text2);
  display:flex;align-items:center;gap:4px;
}
.req{color:var(--pk3);font-size:0.9rem;line-height:1}

/* Inputs */
input[type=text],input[type=email],input[type=tel],
input[type=number],select,textarea{
  width:100%;padding:11px 14px;
  background:var(--input-bg);
  border:1.5px solid var(--border);
  border-radius:10px;
  font-family:'DM Sans',sans-serif;font-size:0.88rem;
  color:var(--text);font-weight:400;
  transition:all 0.25s cubic-bezier(0.4,0,0.2,1);
  outline:none;
  -webkit-appearance:none;appearance:none;
}
input::placeholder,textarea::placeholder{color:rgba(74,16,48,0.35);font-weight:300}
input:focus,select:focus,textarea:focus{
  border-color:var(--pk2);
  background:var(--input-focus);
  box-shadow:0 0 0 3px rgba(192,0,90,0.1),0 2px 12px rgba(192,0,90,0.08);
}
input:focus + .field-icon,select:focus + .field-icon{color:var(--pk2)}
select{
  cursor:pointer;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%238B0036' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
  background-repeat:no-repeat;background-position:right 14px center;
  padding-right:36px;
}
textarea{resize:vertical;min-height:100px;line-height:1.6}

/* Toggle switches */
.toggle-row{
  display:flex;align-items:center;justify-content:space-between;
  padding:14px 18px;border-radius:12px;
  background:var(--input-bg);border:1.5px solid var(--border);
  margin-bottom:12px;transition:all 0.25s;
  gap:16px;
}
.toggle-row:hover{border-color:var(--border2);background:#fff}
.toggle-label{
  font-size:0.88rem;color:var(--text);font-weight:400;line-height:1.5;flex:1;
}
.toggle-label .req{display:inline;margin-left:2px}
.toggle{
  position:relative;flex-shrink:0;
  width:48px;height:26px;cursor:pointer;
}
.toggle input{opacity:0;width:0;height:0;position:absolute}
.toggle-track{
  position:absolute;inset:0;border-radius:13px;
  background:#ddd;transition:all 0.3s cubic-bezier(0.4,0,0.2,1);
  border:2px solid transparent;
}
.toggle input:checked ~ .toggle-track{
  background:linear-gradient(135deg,var(--pk),var(--pk2));
  border-color:transparent;
}
.toggle-thumb{
  position:absolute;top:3px;left:3px;
  width:20px;height:20px;border-radius:50%;
  background:#fff;
  box-shadow:0 1px 4px rgba(0,0,0,0.2);
  transition:transform 0.3s cubic-bezier(0.34,1.56,0.64,1);
}
.toggle input:checked ~ .toggle-track .toggle-thumb{transform:translateX(22px)}

/* Star rating */
.rating-wrap{margin-bottom:20px}
.rating-label{font-size:0.84rem;font-weight:600;color:var(--text2);margin-bottom:10px}
.stars{display:flex;gap:6px}
.star-btn{
  width:40px;height:40px;border-radius:10px;border:1.5px solid var(--border);
  background:var(--input-bg);cursor:pointer;
  font-family:'Bebas Neue',sans-serif;font-size:1rem;letter-spacing:0.04em;
  color:var(--text3);
  display:grid;place-items:center;
  transition:all 0.2s cubic-bezier(0.4,0,0.2,1);
  position:relative;
}
.star-btn:hover,
.star-btn.selected{
  background:linear-gradient(135deg,var(--pk),var(--pk2));
  border-color:transparent;color:#fff;
  transform:scale(1.08);
  box-shadow:0 4px 16px rgba(192,0,90,0.3);
}

/* Conditional reveal */
.cond-field{
  display:none;margin-top:12px;padding:16px;
  background:#fef5f8;border:1px solid #f0c8d8;border-radius:12px;
  animation:fadeSlideUp 0.35s ease both;
}
.cond-field.shown{display:block}

/* Submit button */
.submit-wrap{
  display:flex;flex-direction:column;align-items:center;
  gap:16px;padding-top:8px;
}
.btn-submit{
  background:linear-gradient(135deg,var(--pk) 0%,var(--pk2) 50%,var(--pk-light) 100%);
  color:#fff;border:none;cursor:pointer;
  font-family:'Bebas Neue',sans-serif;
  font-size:1.2rem;letter-spacing:0.12em;
  padding:16px 64px;border-radius:12px;
  box-shadow:0 8px 32px rgba(192,0,90,0.4);
  transition:all 0.3s cubic-bezier(0.4,0,0.2,1);
  position:relative;overflow:hidden;
  width:100%;max-width:360px;
}
.btn-submit::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(135deg,transparent 35%,rgba(255,255,255,0.18) 50%,transparent 65%);
  transform:translateX(-100%);transition:transform 0.6s ease;
}
.btn-submit:hover{
  transform:translateY(-2px);
  box-shadow:0 14px 48px rgba(192,0,90,0.55);
}
.btn-submit:hover::after{transform:translateX(100%)}
.btn-submit:active{transform:translateY(0)}
.submit-note{
  font-family:'JetBrains Mono',monospace;font-size:0.62rem;
  letter-spacing:0.1em;color:var(--text3);text-align:center;
}

/* Success overlay */
.success-overlay{
  display:none;position:fixed;inset:0;z-index:999;
  background:rgba(61,0,32,0.92);backdrop-filter:blur(16px);
  place-items:center;
}
.success-overlay.show{display:grid}
.success-card{
  background:#fff;border-radius:24px;padding:56px 48px;
  text-align:center;max-width:480px;width:90%;
  box-shadow:0 32px 80px rgba(0,0,0,0.5);
  animation:popIn 0.6s cubic-bezier(0.34,1.56,0.64,1) both;
}
@keyframes popIn{0%{opacity:0;transform:scale(0.8)}100%{opacity:1;transform:scale(1)}}
.success-icon{font-size:4rem;margin-bottom:16px;display:block}
.success-card h2{
  font-family:'Bebas Neue',sans-serif;font-size:2rem;letter-spacing:0.08em;
  color:var(--pk);margin-bottom:12px;
}
.success-card p{font-size:0.9rem;color:var(--text2);line-height:1.7;margin-bottom:24px}
.btn-close-success{
  background:linear-gradient(135deg,var(--pk),var(--pk2));
  color:#fff;border:none;cursor:pointer;
  font-family:'DM Sans',sans-serif;font-weight:600;
  font-size:0.9rem;padding:12px 32px;border-radius:10px;
  box-shadow:0 4px 20px rgba(192,0,90,0.3);transition:all 0.25s;
}
.btn-close-success:hover{transform:translateY(-1px);box-shadow:0 8px 28px rgba(192,0,90,0.45)}

/* Powered by footer */
.form-footer{
  text-align:center;padding:20px 48px 32px;
  border-top:1px solid var(--border);
  background:#fdf6f9;
}
.powered{
  font-family:'JetBrains Mono',monospace;font-size:0.6rem;
  letter-spacing:0.16em;text-transform:uppercase;
  color:var(--text3);margin-bottom:8px;
}
.powered-logos{display:flex;align-items:center;justify-content:center;gap:6px}
.bdapps-badge{
  background:linear-gradient(135deg,var(--pk),var(--pk2));
  color:#fff;font-family:'Bebas Neue',sans-serif;
  font-size:0.85rem;letter-spacing:0.08em;
  padding:4px 12px;border-radius:6px;
}

/* Validation */
input.error,select.error,textarea.error{
  border-color:#e53e3e;background:#fff5f5;
  box-shadow:0 0 0 3px rgba(229,62,62,0.1);
}
.field-error{font-size:0.74rem;color:#e53e3e;margin-top:4px;display:none}
.field-error.show{display:block}

/* Keyframes */
@keyframes fadeSlideDown{
  from{opacity:0;transform:translateY(-20px)}to{opacity:1;transform:translateY(0)}
}
@keyframes fadeSlideUp{
  from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}
}

/* Responsive */
@media(max-width:640px){
  nav{padding:0 20px}
  .nav-links .hide-mob{display:none}
  .form-body{padding:28px 24px 36px}
  .card-header{padding:28px 24px 24px}
  .field-row{grid-template-columns:1fr}
  .form-footer{padding:20px 24px 28px}
  .btn-submit{font-size:1rem;padding:14px 48px}
  .progress-steps{display:none}
}
</style>
</head>
<body>

<canvas id="bg-canvas"></canvas>
<div class="aurora">
  <div class="ab ab1"></div>
  <div class="ab ab2"></div>
  <div class="ab ab3"></div>
</div>

<!-- SUCCESS OVERLAY -->
<div class="success-overlay" id="success-overlay">
  <div class="success-card">
    <span class="success-icon">🎉</span>
    <h2>Application Submitted!</h2>
    <p>Thank you for applying to the National Android Development Bootcamp 2026. Your registration has been saved. Our team will review your application and contact you soon.</p>
    <button class="btn-close-success" onclick="document.getElementById('success-overlay').classList.remove('show');window.location.href='/'">Back to Home</button>
  </div>
</div>

<!-- NAV -->
<nav id="nav">
  <div class="nav-logo">
    <img src="{{asset('assets/images/national_andriod_bootcamp_logo.png')}}" alt="NADB Logo">
  </div>
  <div class="nav-links">
    <a href="index.html" class="nav-back hide-mob">← Back to Home</a>
    <a href="index.html#overview" class="hide-mob">Overview</a>
    <a href="index.html#prizes" class="hide-mob">Prizes</a>
    <a href="index.html#timeline" class="hide-mob">Timeline</a>
  </div>
</nav>

<!-- PAGE -->
<div class="page-wrapper">
  <!-- Hero -->
  <div class="form-hero">
    <img src="{{asset('assets/images/national_andriod_bootcamp_logo.png')}}" alt="National Android Development Bootcamp">
    <div class="form-hero-sub">// Free Registration · 150 Seats · Deadline April 30, 2026</div>
  </div>

  <!-- Form Card -->
  <div class="form-card">
    <!-- Header -->
    <div class="card-header">
      <h1>Registration Form</h1>
      <p>Join Bangladesh's most ambitious Android developer program — completely free of charge.</p>
      <span class="required-note">* Fields marked with an asterisk are required</span>
    </div>

    <!-- Progress -->
    <div class="progress-wrap">
      <div class="progress-steps">
        <div class="pstep active" id="pstep-1">01 · Personal Info</div>
        <div class="pstep" id="pstep-2">02 · Background</div>
        <div class="pstep" id="pstep-3">03 · Experience</div>
        <div class="pstep" id="pstep-4">04 · Agreement</div>
      </div>
      <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
    </div>

    <!-- Form -->
    <form class="form-body" id="reg-form" novalidate>

      <!-- SECTION 1: Personal Info -->
      <div class="form-section" id="sec1">
        <div class="section-title">
          <div class="section-icon">👤</div>
          Personal Information
        </div>

        <div class="field-row">
          <div class="field-group">
            <label for="full_name">Full Name <span class="req">*</span></label>
            <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>
            <span class="field-error" id="err-full_name">Please enter your full name</span>
          </div>
          <div class="field-group">
            <label for="mobile_number">Mobile Number <span class="req">*</span></label>
            <input type="tel" id="mobile_number" name="mobile_number" placeholder="01xxxxxxxxx" required>
            <span class="field-error" id="err-mobile_number">Please enter a valid mobile number</span>
          </div>
        </div>

        <div class="field-row">
          <div class="field-group">
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" id="email" name="email" placeholder="info@xyz.com" required>
            <span class="field-error" id="err-email">Please enter a valid email address</span>
          </div>
          <div class="field-group">
            <label for="home_address">Home Address <span class="req">*</span></label>
            <input type="text" id="home_address" name="home_address" placeholder="Village, Upazila, District" required>
            <span class="field-error" id="err-home_address">Please enter your home address</span>
          </div>
        </div>

        <div class="field-row">
          <div class="field-group">
            <label for="current_address">Current Address <span class="req">*</span></label>
            <input type="text" id="current_address" name="current_address" placeholder="House, Road, Area, City" required>
            <span class="field-error" id="err-current_address">Please enter your current address</span>
          </div>

          <div class="field-group">
            <label for="division">Division <span class="req">*</span></label>
            <select id="division" name="division" required>
              <option value="" disabled selected>Select your division</option>
              <option>Barishal</option>
              <option>Chattogram</option>
              <option>Dhaka</option>
              <option>Khulna</option>
              <option>Mymensingh</option>
              <option>Rajshahi</option>
              <option>Rangpur</option>
              <option>Sylhet</option>
            </select>
            <span class="field-error" id="err-division">Please select your division</span>
          </div>
        </div>
      </div>

      <!-- SECTION 2: Educational Background -->
      <div class="form-section" id="sec2">
        <div class="section-title">
          <div class="section-icon">🎓</div>
          Educational Background
        </div>

        <div class="field-row full">
          <div class="field-group">
            <label for="educational_background">Educational Background <span class="req">*</span></label>
            <textarea id="educational_background" name="educational_background" placeholder="Describe your educational background — degree, institution, year of graduation, etc." rows="4" required></textarea>
            <span class="field-error" id="err-educational_background">Please describe your educational background</span>
          </div>
        </div>
      </div>

      <!-- SECTION 3: Requirements Check -->
      <div class="form-section" id="sec3">
        <div class="section-title">
          <div class="section-icon">💻</div>
          Technical Requirements
        </div>

        <div class="toggle-row">
          <span class="toggle-label">Do you have your personal Laptop/Desktop PC? <span class="req">*</span></span>
          <label class="toggle">
            <input type="checkbox" id="has-laptop" name="has_laptop" checked>
            <div class="toggle-track"><div class="toggle-thumb"></div></div>
          </label>
        </div>

        <div class="toggle-row">
          <span class="toggle-label">Do you have wifi / broadband internet connection? <span class="req">*</span></span>
          <label class="toggle">
            <input type="checkbox" id="has-wifi" name="has_wifi" checked>
            <div class="toggle-track"><div class="toggle-thumb"></div></div>
          </label>
        </div>
      </div>

      <!-- SECTION 4: Programming Experience -->
      <div class="form-section" id="sec4">
        <div class="section-title">
          <div class="section-icon">⌨️</div>
          Programming Experience
        </div>

        <div class="toggle-row">
          <span class="toggle-label">Do you have programming experience? <span class="req">*</span></span>
          <label class="toggle">
            <input type="checkbox" id="has-prog" name="has_programming_exp" onchange="toggleCond('prog-details',this.checked)">
            <div class="toggle-track"><div class="toggle-thumb"></div></div>
          </label>
        </div>

        <div class="cond-field" id="prog-details">
          <div class="field-group" style="margin-bottom:16px">
            <label for="prog-desc">Describe your programming experience</label>
            <textarea id="prog-desc" name="prog_experience_desc" placeholder="Languages you know, projects you've built, frameworks used, etc." rows="4"></textarea>
          </div>
          <div class="rating-wrap">
            <div class="rating-label">Rate your programming experience</div>
            <div class="stars" id="prog-stars">
              <button type="button" class="star-btn selected" data-rating="1" data-target="prog-rating" onclick="setRating('prog-stars','prog-rating',1)">1</button>
              <button type="button" class="star-btn" data-rating="2" data-target="prog-rating" onclick="setRating('prog-stars','prog-rating',2)">2</button>
              <button type="button" class="star-btn" data-rating="3" data-target="prog-rating" onclick="setRating('prog-stars','prog-rating',3)">3</button>
              <button type="button" class="star-btn" data-rating="4" data-target="prog-rating" onclick="setRating('prog-stars','prog-rating',4)">4</button>
              <button type="button" class="star-btn" data-rating="5" data-target="prog-rating" onclick="setRating('prog-stars','prog-rating',5)">5</button>
            </div>
            <input type="hidden" id="prog-rating" name="prog_experience_rating" value="1">
          </div>
        </div>

        <!-- Android Experience -->
        <div class="toggle-row" style="margin-top:12px">
          <span class="toggle-label">Do you have Android app development experience? <span class="req">*</span></span>
          <label class="toggle">
            <input type="checkbox" id="has-android" name="has_android_exp" onchange="toggleCond('android-details',this.checked)">
            <div class="toggle-track"><div class="toggle-thumb"></div></div>
          </label>
        </div>

        <div class="cond-field" id="android-details">
          <div class="field-group" style="margin-bottom:16px">
            <label for="app-links">Provide links to your developed app/apps <span style="font-weight:300;color:var(--text3)">(Play Store, GitHub, Drive)</span></label>
            <textarea id="app-links" name="app_links" placeholder="https://play.google.com/store/apps/details?id=..." rows="3"></textarea>
          </div>
          <div class="rating-wrap">
            <div class="rating-label">Rate your Android app development experience</div>
            <div class="stars" id="android-stars">
              <button type="button" class="star-btn selected" data-rating="1" onclick="setRating('android-stars','android-rating',1)">1</button>
              <button type="button" class="star-btn" data-rating="2" onclick="setRating('android-stars','android-rating',2)">2</button>
              <button type="button" class="star-btn" data-rating="3" onclick="setRating('android-stars','android-rating',3)">3</button>
              <button type="button" class="star-btn" data-rating="4" onclick="setRating('android-stars','android-rating',4)">4</button>
              <button type="button" class="star-btn" data-rating="5" onclick="setRating('android-stars','android-rating',5)">5</button>
            </div>
            <input type="hidden" id="android-rating" name="android_exp_rating" value="1">
          </div>
        </div>
      </div>

      <!-- SECTION 5: Agreement -->
      <div class="form-section" id="sec5">
        <div class="section-title">
          <div class="section-icon">✅</div>
          Agreement & Consent
        </div>

        <div class="toggle-row">
          <span class="toggle-label">I agree to allocate <strong>6 hours per week for 3 months</strong> to complete the training program. <span class="req">*</span></span>
          <label class="toggle">
            <input type="checkbox" id="agree-hours" name="agree_hours" required>
            <div class="toggle-track"><div class="toggle-thumb"></div></div>
          </label>
        </div>

        <div class="toggle-row">
          <span class="toggle-label">I agree to bear any cost necessary to host my developed application during the program. <span class="req">*</span></span>
          <label class="toggle">
            <input type="checkbox" id="agree-hosting" name="agree_hosting" required>
            <div class="toggle-track"><div class="toggle-thumb"></div></div>
          </label>
        </div>

        <div class="toggle-row">
          <span class="toggle-label">I have seen the class schedule and agree that I can attend all classes as per the given schedule. <span class="req">*</span></span>
          <label class="toggle">
            <input type="checkbox" id="agree-schedule" name="agree_schedule" required>
            <div class="toggle-track"><div class="toggle-thumb"></div></div>
          </label>
        </div>
      </div>

      <!-- Submit -->
      <div class="submit-wrap">
        <button type="submit" class="btn-submit">Sign Up →</button>
        <span class="submit-note">// Free · Individual · Deadline April 30, 2026</span>
      </div>

    </form>

    <!-- Footer -->
    <div class="form-footer">
      <div class="powered">Powered By</div>
      <div class="powered-logos">
        <div class="bdapps-badge">bdapps</div>
        <span style="font-family:'JetBrains Mono',monospace;font-size:0.65rem;color:var(--text3);margin:0 4px">×</span>
        <span style="font-family:'DM Sans',sans-serif;font-weight:600;font-size:0.85rem;color:var(--pk)">Robi Axiata PLC</span>
      </div>
    </div>
  </div>
</div>

<script>
/* ── CANVAS BG ── */
const cv=document.getElementById('bg-canvas');
const cx=cv.getContext('2d');
let W,H;
function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight}
resize();window.addEventListener('resize',resize);
let t=0;
class Orb{
  constructor(){this.reset()}
  reset(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.r=Math.random()*180+80;this.phase=Math.random()*Math.PI*2;
    this.speed=Math.random()*0.003+0.002;this.baseAlpha=Math.random()*0.05+0.02;
    this.hue=Math.random()>0.5?'232,0,90':'180,0,80';
    this.vx=(Math.random()-0.5)*0.12;this.vy=(Math.random()-0.5)*0.08;
  }
  draw(){
    this.phase+=this.speed;this.x+=this.vx;this.y+=this.vy;
    if(this.x<-200||this.x>W+200||this.y<-200||this.y>H+200)this.reset();
    const a=this.baseAlpha*(0.6+0.4*Math.sin(this.phase));
    const g=cx.createRadialGradient(this.x,this.y,0,this.x,this.y,this.r);
    g.addColorStop(0,`rgba(${this.hue},${a})`);g.addColorStop(1,`rgba(${this.hue},0)`);
    cx.fillStyle=g;cx.beginPath();cx.arc(this.x,this.y,this.r,0,Math.PI*2);cx.fill();
  }
}
const ORBS=Array.from({length:6},()=>new Orb());
ORBS.forEach(o=>{o.x=Math.random()*W;o.y=Math.random()*H});
function drawBg(){
  const g=cx.createLinearGradient(0,0,W,H);
  g.addColorStop(0,'#3D0020');g.addColorStop(0.5,'#6B003A');g.addColorStop(1,'#B50060');
  cx.fillStyle=g;cx.fillRect(0,0,W,H);
}
function frame(){
  t+=0.016;drawBg();ORBS.forEach(o=>o.draw());
  requestAnimationFrame(frame);
}
frame();

/* ── NAV SCROLL ── */
window.addEventListener('scroll',()=>{
  document.getElementById('nav').classList.toggle('scrolled',scrollY>60);
});

/* ── SECTION REVEAL ── */
const sections=document.querySelectorAll('.form-section');
const io=new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('visible')});
},{threshold:0.1});
sections.forEach(s=>io.observe(s));

/* ── PROGRESS UPDATE ── */
function updateProgress(){
  const fields=[
    document.getElementById('full_name'),
    document.getElementById('mobile_number'),
    document.getElementById('email'),
    document.getElementById('home_address'),
    document.getElementById('current_address'),
    document.getElementById('division'),
    document.getElementById('educational_background'),
  ];
  const agreeds=[
    document.getElementById('agree-hours'),
    document.getElementById('agree-hosting'),
    document.getElementById('agree-schedule'),
  ];
  let filled=fields.filter(f=>f&&f.value.trim()).length;
  let agreed=agreeds.filter(c=>c&&c.checked).length;
  const pct=Math.round(((filled/fields.length)*0.7+(agreed/agreeds.length)*0.3)*100);
  document.getElementById('progress-fill').style.width=pct+'%';
  // Step highlights
  const steps=['pstep-1','pstep-2','pstep-3','pstep-4'];
  const thresholds=[0,25,50,75];
  steps.forEach((id,i)=>{
    const el=document.getElementById(id);
    el.classList.toggle('active',pct>=thresholds[i]&&(i===steps.length-1||pct<thresholds[i+1]));
    el.classList.toggle('done',pct>thresholds[i]);
  });
}
document.querySelectorAll('input,select,textarea').forEach(el=>{
  el.addEventListener('input',updateProgress);
  el.addEventListener('change',updateProgress);
});

/* ── CONDITIONAL FIELDS ── */
function toggleCond(id,show){
  const el=document.getElementById(id);
  if(show)el.classList.add('shown');
  else el.classList.remove('shown');
}

/* ── STAR RATING ── */
function setRating(starsId,hiddenId,val){
  const stars=document.querySelectorAll('#'+starsId+' .star-btn');
  stars.forEach(s=>{
    const r=parseInt(s.dataset.rating);
    s.classList.toggle('selected',r===val);
  });
  document.getElementById(hiddenId).value=val;
}

/* ── FORM VALIDATION & SUBMIT ── */
document.getElementById('reg-form').addEventListener('submit',function(e){
  e.preventDefault();
  let valid=true;

  /* Required text fields */
  const required=[
    {id:'full_name',err:'err-full_name'},
    {id:'mobile_number',err:'err-mobile_number'},
    {id:'email',err:'err-email'},
    {id:'home_address',err:'err-home_address'},
    {id:'current_address',err:'err-current_address'},
    {id:'division',err:'err-division'},
    {id:'educational_background',err:'err-educational_background'},
  ];
  required.forEach(f=>{
    const el=document.getElementById(f.id);
    const err=document.getElementById(f.err);
    if(!el.value.trim()){
      el.classList.add('error');err.classList.add('show');valid=false;
      el.scrollIntoView({behavior:'smooth',block:'center'});
    } else {
      el.classList.remove('error');err.classList.remove('show');
    }
  });

  /* Agreement checkboxes */
  const agrees=['agree-hours','agree-hosting','agree-schedule'];
  const allAgreed=agrees.every(id=>document.getElementById(id).checked);
  if(!allAgreed){
    valid=false;
    document.getElementById('agree-hours').closest('.form-section').scrollIntoView({behavior:'smooth',block:'center'});
    alert('Please agree to all terms before submitting.');
  }

  if(!valid)return;

  /* Collect data */
  const data={
    full_name: document.getElementById('full_name').value.trim(),
    mobile_number: document.getElementById('mobile_number').value.trim(),
    email: document.getElementById('email').value.trim(),
    home_address: document.getElementById('home_address').value.trim(),
    current_address: document.getElementById('current_address').value.trim(),
    division: document.getElementById('division').value,
    educational_background: document.getElementById('educational_background').value.trim(),
    has_pc: document.getElementById('has-laptop').checked?'yes':'no',
    has_wifi: document.getElementById('has-wifi').checked?'yes':'no',
    has_programming_experience: document.getElementById('has-prog').checked?'yes':'no',
    programming_experience: document.getElementById('prog-desc').value.trim(),
    programming_experience_rate: parseInt(document.getElementById('prog-rating').value),
    has_android_experience: document.getElementById('has-android').checked?'yes':'no',
    android_experience: document.getElementById('app-links').value.trim()||null,
    android_experience_rate: document.getElementById('has-android').checked?parseInt(document.getElementById('android-rating').value):null,
    allocate_time: document.getElementById('agree-hours').checked?'yes':'no',
    bear_cost: document.getElementById('agree-hosting').checked?'yes':'no',
    agree_schedule: document.getElementById('agree-schedule').checked?'yes':'no'
  };

  /* Post data to API */
  fetch('https://bdapps-nadb.com/api/registration',{
    method:'POST',
    headers:{'Content-Type':'application/json'},
    body:JSON.stringify(data)
  })
  .then(response=>response.json().then(body=>({status:response.status,body})))
  .then(({status,body})=>{
    if(status===422||status===400){
      /* Handle validation errors */
      if(body.errors){
        Object.keys(body.errors).forEach(field=>{
          const errEl=document.getElementById('err-'+field);
          if(errEl){
            errEl.textContent=body.errors[field][0];
            errEl.classList.add('show');
          }
          const inputEl=document.getElementById(field);
          if(inputEl){
            inputEl.classList.add('error');
            inputEl.scrollIntoView({behavior:'smooth',block:'center'});
          }
        });
      }
      throw new Error(body.message||'Validation failed');
    }
    if(status===200&&body.success){
      return body;
    }
    throw new Error(body.message||'Unknown error');
  })
  .then(result=>{
    /* Save to localStorage as backup */
    const stored=JSON.parse(localStorage.getItem('nadb_registrations')||'[]');
    stored.push(data);
    localStorage.setItem('nadb_registrations',JSON.stringify(stored));
    
    /* Update success message with backend response */
    const successCard=document.querySelector('.success-card p');
    if(successCard)successCard.textContent=result.message;
    
    /* Show success */
    document.getElementById('success-overlay').classList.add('show');
    document.getElementById('progress-fill').style.width='100%';
  })
  .catch(err=>{
    console.error('Registration error:',err);
    if(!err.message.includes('Validation'))alert('Error submitting registration: '+err.message);
  });
});
</script>
</body>
</html>