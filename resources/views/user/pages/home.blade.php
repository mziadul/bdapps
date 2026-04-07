<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>National Android Development Bootcamp 2026 — bdapps</title>
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

:root{
  --pk:#E8005A;--pk2:#FF1A6E;--pk3:#8B0036;
  --bg:#3D0020;--bg2:#6B003A;--bg3:#B50060;
  --gold:#F5C518;--gold2:#FFD700;
  --w:#fff;--w7:rgba(255,255,255,0.7);--w5:rgba(255,255,255,0.5);
  --w4:rgba(255,255,255,0.4);--w2:rgba(255,255,255,0.2);
  --w1:rgba(255,255,255,0.1);--w08:rgba(255,255,255,0.08);
  --w05:rgba(255,255,255,0.05);
  --bd:rgba(255,255,255,0.14);
}

html{scroll-behavior:smooth}
body{
  font-family:'DM Sans',sans-serif;
  background:var(--bg);color:var(--w);
  overflow-x:hidden;font-weight:300;
}

/* ═══════════════════════════════════
   CANVAS
═══════════════════════════════════ */
#bg-canvas{
  position:fixed;inset:0;z-index:0;pointer-events:none;
}

/* ═══════════════════════════════════
   AURORA OVERLAY
═══════════════════════════════════ */
.aurora{
  position:fixed;inset:0;z-index:1;pointer-events:none;overflow:hidden;
}
.aurora-band{
  position:absolute;border-radius:50%;
  filter:blur(80px);opacity:0;
  animation:auroraDrift linear infinite;
}
.ab1{
  width:900px;height:600px;
  background:radial-gradient(ellipse,rgba(232,0,90,0.18) 0%,transparent 65%);
  top:-100px;left:-200px;
  animation-duration:18s;animation-delay:0s;
}
.ab2{
  width:700px;height:500px;
  background:radial-gradient(ellipse,rgba(255,100,150,0.12) 0%,transparent 65%);
  top:20%;right:-150px;
  animation-duration:22s;animation-delay:-6s;
}
.ab3{
  width:600px;height:800px;
  background:radial-gradient(ellipse,rgba(180,0,80,0.14) 0%,transparent 65%);
  bottom:-100px;left:20%;
  animation-duration:26s;animation-delay:-12s;
}
.ab4{
  width:500px;height:400px;
  background:radial-gradient(ellipse,rgba(245,197,24,0.06) 0%,transparent 65%);
  top:40%;left:40%;
  animation-duration:20s;animation-delay:-4s;
}
@keyframes auroraDrift{
  0%{opacity:0;transform:translate(0,0) scale(1)}
  20%{opacity:1}
  50%{transform:translate(60px,40px) scale(1.08)}
  80%{opacity:0.7}
  100%{opacity:0;transform:translate(0,0) scale(1)}
}

/* ═══════════════════════════════════
   NAV
═══════════════════════════════════ */
nav{
  position:fixed;top:0;left:0;right:0;z-index:300;
  display:flex;align-items:center;justify-content:space-between;
  padding:0 48px;height:70px;
  background:rgba(35,0,16,0.6);
  backdrop-filter:blur(28px) saturate(1.8);
  -webkit-backdrop-filter:blur(28px) saturate(1.8);
  border-bottom:1px solid rgba(255,255,255,0.07);
  transition:all 0.5s cubic-bezier(0.4,0,0.2,1);
}
nav.scrolled{
  background:rgba(22,0,10,0.92);
  box-shadow:0 4px 48px rgba(0,0,0,0.5),0 1px 0 rgba(232,0,90,0.15);
}
.nav-logo img{
  height:40px;width:auto;
  filter:brightness(0) invert(1);opacity:0.9;
  transition:opacity 0.3s;
}
.nav-logo img:hover{opacity:1}
.nav-links{display:flex;align-items:center;gap:2px}
.nav-links a{
  font-family:'DM Sans',sans-serif;font-weight:500;font-size:0.82rem;
  color:rgba(255,255,255,0.6);text-decoration:none;
  padding:7px 14px;border-radius:6px;letter-spacing:0.02em;
  transition:all 0.25s;position:relative;
}
.nav-links a::after{
  content:'';position:absolute;bottom:4px;left:50%;width:0;height:1.5px;
  background:var(--pk2);transform:translateX(-50%);transition:width 0.3s;
}
.nav-links a:hover{color:#fff}
.nav-links a:hover::after{width:60%}
.nav-cta{
  background:var(--pk)!important;color:#fff!important;
  font-weight:600!important;padding:9px 22px!important;
  border-radius:8px!important;letter-spacing:0.04em!important;
  box-shadow:0 0 20px rgba(232,0,90,0.35);
  transition:all 0.3s!important;
}
.nav-cta::after{display:none!important}
.nav-cta:hover{
  background:var(--pk2)!important;
  transform:translateY(-1px)!important;
  box-shadow:0 0 40px rgba(255,26,110,0.5)!important;
}

/* ═══════════════════════════════════
   HERO
═══════════════════════════════════ */
.hero{
  min-height:100vh;
  display:grid;place-items:center;
  padding:110px 48px 80px;
  text-align:center;
  position:relative;z-index:2;
  overflow:hidden;
}

/* Breathing rings behind hero */
.hero-rings{
  position:absolute;inset:0;display:grid;place-items:center;
  pointer-events:none;z-index:0;
}
.ring{
  position:absolute;border-radius:50%;
  border:1px solid rgba(232,0,90,0.12);
  animation:ringBreath ease-in-out infinite;
}
.ring:nth-child(1){width:320px;height:320px;animation-duration:6s;animation-delay:0s}
.ring:nth-child(2){width:540px;height:540px;animation-duration:8s;animation-delay:-2s}
.ring:nth-child(3){width:760px;height:760px;animation-duration:10s;animation-delay:-4s;border-color:rgba(232,0,90,0.06)}
.ring:nth-child(4){width:980px;height:980px;animation-duration:12s;animation-delay:-6s;border-color:rgba(232,0,90,0.04)}
@keyframes ringBreath{
  0%,100%{transform:scale(1);opacity:0.6}
  50%{transform:scale(1.03);opacity:1}
}

.hero-content{position:relative;z-index:2}

/* kicker */
.hero-kicker{
  font-family:'JetBrains Mono',monospace;
  font-size:0.72rem;font-weight:500;letter-spacing:0.3em;
  text-transform:uppercase;color:rgba(255,255,255,0.4);
  margin-bottom:28px;
  display:flex;align-items:center;justify-content:center;gap:16px;
  opacity:0;animation:fadeSlideDown 1s 0.3s cubic-bezier(0.22,1,0.36,1) forwards;
}
.hero-kicker::before,.hero-kicker::after{
  content:'';flex:1;max-width:60px;height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.2));
}
.hero-kicker::after{background:linear-gradient(270deg,transparent,rgba(255,255,255,0.2))}

/* Logo */
.hero-logo-wrap{
  opacity:0;
  animation:logoReveal 1.4s 0.5s cubic-bezier(0.22,1,0.36,1) forwards;
  margin-bottom:8px;
}
@keyframes logoReveal{
  0%{opacity:0;transform:translateY(40px) scale(0.94)}
  100%{opacity:1;transform:translateY(0) scale(1)}
}
.hero-logo-img{
  width:min(780px,88vw);height:auto;display:block;margin:0 auto;
  filter:
    drop-shadow(0 0 48px rgba(232,0,90,0.4))
    drop-shadow(0 0 100px rgba(232,0,90,0.15))
    drop-shadow(0 4px 24px rgba(0,0,0,0.6));
  animation:logoGlow 4s 1.9s ease-in-out infinite;
}
@keyframes logoGlow{
  0%,100%{filter:drop-shadow(0 0 48px rgba(232,0,90,0.4)) drop-shadow(0 0 100px rgba(232,0,90,0.15)) drop-shadow(0 4px 24px rgba(0,0,0,0.6))}
  50%{filter:drop-shadow(0 0 72px rgba(232,0,90,0.6)) drop-shadow(0 0 140px rgba(232,0,90,0.25)) drop-shadow(0 4px 24px rgba(0,0,0,0.6))}
}

/* hero desc */
.hero-desc{
  font-size:1rem;color:rgba(255,255,255,0.58);
  max-width:520px;margin:28px auto 0;
  line-height:1.88;font-weight:300;font-style:italic;
  opacity:0;animation:fadeSlideUp 1s 1.1s cubic-bezier(0.22,1,0.36,1) forwards;
}

/* stats bar */
.hero-bar{
  display:flex;align-items:stretch;
  margin:40px auto 0;max-width:660px;
  border:1px solid rgba(255,255,255,0.12);border-radius:14px;
  overflow:hidden;
  background:rgba(255,255,255,0.03);
  backdrop-filter:blur(16px);
  opacity:0;animation:fadeSlideUp 1s 1.3s cubic-bezier(0.22,1,0.36,1) forwards;
}
.hb-item{
  flex:1;padding:20px 14px;text-align:center;
  border-right:1px solid rgba(255,255,255,0.08);
  transition:background 0.4s;cursor:default;position:relative;overflow:hidden;
}
.hb-item::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(180deg,rgba(232,0,90,0.08),transparent);
  opacity:0;transition:opacity 0.4s;
}
.hb-item:hover::before{opacity:1}
.hb-item:last-child{border-right:none}
.hb-val{
  font-family:'Bebas Neue',sans-serif;font-size:2.1rem;
  letter-spacing:0.06em;color:#fff;line-height:1;margin-bottom:5px;
}
.hb-lbl{font-family:'JetBrains Mono',monospace;font-size:0.56rem;letter-spacing:0.16em;text-transform:uppercase;color:rgba(255,255,255,0.35)}

/* countdown */
.cd-wrap{
  margin-top:32px;text-align:center;
  opacity:0;animation:fadeSlideUp 1s 1.5s cubic-bezier(0.22,1,0.36,1) forwards;
}
.cd-label{
  font-family:'JetBrains Mono',monospace;font-size:0.6rem;
  letter-spacing:0.24em;text-transform:uppercase;color:rgba(255,255,255,0.3);margin-bottom:16px;
}
.cd-row{display:flex;gap:10px;justify-content:center;align-items:flex-end}
.cd-box{text-align:center}
.cd-num{
  font-family:'Bebas Neue',sans-serif;font-size:2.8rem;letter-spacing:0.06em;
  color:#fff;line-height:1;display:block;
  text-shadow:0 0 24px rgba(232,0,90,0.5);
  transition:transform 0.15s cubic-bezier(0.34,1.56,0.64,1);
}
.cd-num.tick{transform:scale(1.12)}
.cd-sub{font-family:'JetBrains Mono',monospace;font-size:0.5rem;letter-spacing:0.14em;text-transform:uppercase;color:rgba(255,255,255,0.28);margin-top:3px;display:block}
.cd-colon{font-family:'Bebas Neue',sans-serif;font-size:2rem;color:rgba(255,255,255,0.18);line-height:1;margin-bottom:16px;animation:colonPulse 1s ease-in-out infinite}
@keyframes colonPulse{0%,100%{opacity:0.18}50%{opacity:0.5}}

/* hero btns */
.hero-btns{
  display:flex;gap:14px;justify-content:center;flex-wrap:wrap;margin-top:38px;
  opacity:0;animation:fadeSlideUp 1s 1.7s cubic-bezier(0.22,1,0.36,1) forwards;
}

/* scroll hint */
.scroll-hint{
  margin-top:48px;display:flex;flex-direction:column;align-items:center;gap:8px;
  opacity:0;animation:fadeIn 1s 2.2s ease forwards;
  cursor:default;
}
.scroll-hint span{font-family:'JetBrains Mono',monospace;font-size:0.56rem;letter-spacing:0.2em;text-transform:uppercase;color:rgba(255,255,255,0.22)}
.scroll-arrow{
  width:20px;height:20px;border-right:1.5px solid rgba(255,255,255,0.2);
  border-bottom:1.5px solid rgba(255,255,255,0.2);
  transform:rotate(45deg);
  animation:scrollBounce 2s ease-in-out infinite;
}
@keyframes scrollBounce{
  0%,100%{transform:rotate(45deg) translateY(0);opacity:0.3}
  50%{transform:rotate(45deg) translateY(6px);opacity:0.7}
}

/* ═══════════════════════════════════
   BUTTONS
═══════════════════════════════════ */
.btn-pk{
  background:var(--pk);color:#fff;
  font-family:'DM Sans',sans-serif;font-weight:600;font-size:0.9rem;
  letter-spacing:0.04em;padding:14px 38px;border-radius:10px;
  text-decoration:none;transition:all 0.35s cubic-bezier(0.4,0,0.2,1);
  box-shadow:0 0 0 0 rgba(232,0,90,0);
  position:relative;overflow:hidden;display:inline-block;
}
.btn-pk::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(135deg,transparent 35%,rgba(255,255,255,0.15) 50%,transparent 65%);
  transform:translateX(-100%);transition:transform 0.6s ease;
}
.btn-pk:hover{
  background:var(--pk2);
  transform:translateY(-2px);
  box-shadow:0 8px 32px rgba(232,0,90,0.5),0 0 60px rgba(232,0,90,0.2);
}
.btn-pk:hover::after{transform:translateX(100%)}
.btn-pk:active{transform:translateY(0)}

.btn-ol{
  background:transparent;color:#fff;
  font-family:'DM Sans',sans-serif;font-weight:500;font-size:0.9rem;
  padding:13px 32px;border-radius:10px;text-decoration:none;
  border:1.5px solid rgba(255,255,255,0.22);
  transition:all 0.35s cubic-bezier(0.4,0,0.2,1);
  display:inline-block;
}
.btn-ol:hover{border-color:rgba(255,255,255,0.55);background:rgba(255,255,255,0.06);transform:translateY(-1px)}

/* ═══════════════════════════════════
   PARTNERS
═══════════════════════════════════ */
#partners{
  position:relative;z-index:2;
  padding:56px 48px;
  background:rgba(0,0,0,0.2);backdrop-filter:blur(10px);
  border-top:1px solid rgba(255,255,255,0.06);
  border-bottom:1px solid rgba(255,255,255,0.06);
}
.partners-inner{max-width:1100px;margin:0 auto}
.partners-hd{
  text-align:center;margin-bottom:36px;
  font-family:'JetBrains Mono',monospace;font-size:0.6rem;
  letter-spacing:0.3em;text-transform:uppercase;color:rgba(255,255,255,0.28);
  display:flex;align-items:center;gap:20px;
}
.partners-hd::before,.partners-hd::after{content:'';flex:1;height:1px;background:rgba(255,255,255,0.07)}
.partners-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.partner-card{
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  gap:20px;padding:44px 28px;min-height:170px;
  background:rgba(255,255,255,0.04);
  border:1px solid rgba(255,255,255,0.1);
  border-radius:16px;backdrop-filter:blur(12px);
  transition:all 0.45s cubic-bezier(0.4,0,0.2,1);
  cursor:pointer;position:relative;overflow:hidden;
}
.partner-card::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse at 50% 130%,rgba(232,0,90,0.14),transparent 60%);
  opacity:0;transition:opacity 0.45s;
}
.partner-card::after{
  content:'';position:absolute;bottom:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,var(--pk),var(--pk2));
  transform:scaleX(0);transform-origin:center;transition:transform 0.45s cubic-bezier(0.4,0,0.2,1);
}
.partner-card:hover{
  transform:translateY(-7px);
  border-color:rgba(232,0,90,0.3);
  box-shadow:0 20px 60px rgba(0,0,0,0.35),0 0 40px rgba(232,0,90,0.08);
}
.partner-card:hover::before{opacity:1}
.partner-card:hover::after{transform:scaleX(1)}
.partner-logo-area{
  width:170px;height:66px;
  display:flex;align-items:center;justify-content:center;
}
.partner-logo-area img{
  max-width:100%;max-height:100%;object-fit:contain;
  /*filter:brightness(0) invert(1);opacity:0.65;*/
  /*transition:all 0.45s;*/
}
.partner-card:hover .partner-logo-area img{
  opacity:1;
  filter:brightness(0) invert(1) drop-shadow(0 0 16px rgba(255,255,255,0.4));
}
.logo-ph{
  width:100%;height:100%;
  border:1.5px dashed rgba(255,255,255,0.14);border-radius:10px;
  display:flex;flex-direction:column;align-items:center;justify-content:center;gap:7px;
  transition:border-color 0.3s;
}
.partner-card:hover .logo-ph{border-color:rgba(232,0,90,0.35)}
.ph-icon{font-size:1.5rem;opacity:0.28}
.ph-txt{font-family:'JetBrains Mono',monospace;font-size:0.55rem;letter-spacing:0.18em;text-transform:uppercase;color:rgba(255,255,255,0.2)}
.partner-meta{text-align:center}
.p-name{font-family:'DM Sans',sans-serif;font-weight:600;font-size:0.9rem;color:rgba(255,255,255,0.65);transition:color 0.35s}
.partner-card:hover .p-name{color:#fff}
.p-role{font-family:'JetBrains Mono',monospace;font-size:0.56rem;letter-spacing:0.14em;text-transform:uppercase;color:rgba(255,255,255,0.22);margin-top:4px}

/* ═══════════════════════════════════
   SECTION BASE
═══════════════════════════════════ */
.sec{position:relative;z-index:2;padding:90px 48px}
.wrap{max-width:1100px;margin:0 auto}
.sec-hd{margin-bottom:60px}
.sec-hd.center{text-align:center}
.sec-hd.center .sec-sub{margin:0 auto}
.mono-tag{
  font-family:'JetBrains Mono',monospace;font-size:0.6rem;
  font-weight:500;letter-spacing:0.22em;text-transform:uppercase;
  color:rgba(255,255,255,0.3);margin-bottom:14px;display:block;
}
.sec-title{
  font-family:'Bebas Neue',sans-serif;
  font-size:clamp(2.5rem,5vw,4rem);
  letter-spacing:0.06em;line-height:0.95;color:#fff;margin-bottom:16px;
}
.sec-sub{
  font-size:0.93rem;color:rgba(255,255,255,0.48);
  max-width:520px;line-height:1.84;font-weight:300;font-style:italic;
}
.divider{
  height:1px;margin:0 48px;position:relative;z-index:2;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,0.1),transparent);
}

/* ═══════════════════════════════════
   GLASS
═══════════════════════════════════ */
.g{
  background:rgba(255,255,255,0.06);
  border:1px solid rgba(255,255,255,0.13);
  border-radius:14px;backdrop-filter:blur(16px);
}

/* ═══════════════════════════════════
   PRIZES
═══════════════════════════════════ */
.pool-strip{
  padding:52px;margin-bottom:52px;text-align:center;
  position:relative;overflow:hidden;
}
.pool-strip::before{
  content:'৳';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
  font-family:'Bebas Neue',sans-serif;font-size:22rem;
  color:rgba(255,255,255,0.022);pointer-events:none;line-height:1;
  animation:rotateSlow 30s linear infinite;
}
@keyframes rotateSlow{to{transform:translate(-50%,-50%) rotate(360deg)}}
.pool-num{
  font-family:'Bebas Neue',sans-serif;font-size:clamp(4rem,9vw,7rem);
  letter-spacing:0.04em;color:#fff;line-height:1;
  text-shadow:0 0 60px rgba(232,0,90,0.35),0 0 120px rgba(232,0,90,0.1);
  position:relative;z-index:1;
  animation:numberShimmer 5s ease-in-out infinite;
}
@keyframes numberShimmer{
  0%,100%{text-shadow:0 0 60px rgba(232,0,90,0.35),0 0 120px rgba(232,0,90,0.1)}
  50%{text-shadow:0 0 80px rgba(232,0,90,0.55),0 0 160px rgba(232,0,90,0.2),0 0 30px rgba(255,215,0,0.08)}
}
.pool-lbl{
  font-family:'JetBrains Mono',monospace;font-size:0.66rem;
  letter-spacing:0.26em;text-transform:uppercase;
  color:rgba(255,255,255,0.32);margin-top:10px;position:relative;z-index:1;
}

/* PODIUM */
.podium{display:flex;align-items:flex-end;justify-content:center;gap:18px;margin-bottom:18px}
.pw{display:flex;flex-direction:column;align-items:center;flex:1;max-width:310px}
.pw-lbl{
  font-family:'JetBrains Mono',monospace;font-weight:500;
  font-size:0.63rem;letter-spacing:0.14em;text-transform:uppercase;
  color:rgba(255,255,255,0.4);margin-bottom:10px;
}
.pc{
  width:100%;border-radius:16px;padding:32px 22px;text-align:center;
  background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.16);
  backdrop-filter:blur(18px);
  box-shadow:0 12px 48px rgba(0,0,0,0.22),inset 0 1px 0 rgba(255,255,255,0.12);
  transition:all 0.45s cubic-bezier(0.4,0,0.2,1);
  position:relative;overflow:hidden;
}
.pc::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(180deg,rgba(255,255,255,0.04),transparent);
  pointer-events:none;
}
.pc:hover{
  transform:translateY(-10px);
  border-color:rgba(232,0,90,0.4);
  box-shadow:0 28px 70px rgba(0,0,0,0.35),0 0 50px rgba(232,0,90,0.15);
}
.pc.champ{
  background:rgba(50,0,22,0.85);border-color:rgba(255,255,255,0.26);
  padding:44px 28px;
  box-shadow:0 24px 72px rgba(0,0,0,0.4),0 0 70px rgba(232,0,90,0.18),inset 0 1px 0 rgba(255,255,255,0.18);
}
.pc.champ:hover{
  box-shadow:0 36px 100px rgba(0,0,0,0.45),0 0 120px rgba(232,0,90,0.28);
}

.medal{
  width:36px;height:36px;border-radius:50%;margin:0 auto 14px;
  display:flex;align-items:center;justify-content:center;
  font-family:'Bebas Neue',sans-serif;font-size:1.05rem;letter-spacing:0.04em;
  position:relative;
}
.medal::after{
  content:'';position:absolute;inset:-3px;border-radius:50%;
  border:1px solid currentColor;opacity:0.2;
}
.m-gold{background:linear-gradient(135deg,#FFD700,#FFA000);color:#3a2000;box-shadow:0 0 20px rgba(255,215,0,0.4),0 0 40px rgba(255,215,0,0.1)}
.m-silver{background:linear-gradient(135deg,#e8e8e8,#a0a0a0);color:#2a2a2a;box-shadow:0 0 16px rgba(200,200,200,0.3)}
.m-bronze{background:linear-gradient(135deg,#cd7f32,#9c5a1e);color:#2a1000;box-shadow:0 0 16px rgba(205,127,50,0.3)}

.trophy{
  width:70px;height:70px;margin:0 auto 14px;display:block;
  animation:trophyFloat 4s ease-in-out infinite;
}
@keyframes trophyFloat{
  0%,100%{transform:translateY(0);filter:drop-shadow(0 0 24px rgba(255,215,0,0.5))}
  50%{transform:translateY(-6px);filter:drop-shadow(0 0 40px rgba(255,215,0,0.75))}
}
.champ-pill{
  display:inline-block;background:#fff;color:var(--pk3);
  font-family:'Bebas Neue',sans-serif;font-size:0.82rem;letter-spacing:0.16em;
  padding:5px 22px;border-radius:100px;margin-bottom:14px;
  box-shadow:0 4px 20px rgba(0,0,0,0.2);
}
.p-amt{
  font-family:'Bebas Neue',sans-serif;font-size:clamp(2rem,4vw,2.8rem);
  letter-spacing:0.04em;color:#fff;line-height:1;margin-bottom:8px;
}
.champ .p-amt{font-size:clamp(3rem,6vw,4.2rem)}
.p-bw{font-size:0.77rem;color:rgba(255,255,255,0.48);line-height:1.62;margin-top:12px}
.p-bw strong{color:rgba(255,255,255,0.82)}

.lower{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:14px}
.lc{text-align:center;padding:28px 18px;transition:all 0.4s cubic-bezier(0.4,0,0.2,1)}
.lc:hover{transform:translateY(-5px);border-color:rgba(232,0,90,0.32)}
.lc-rank{
  display:inline-block;font-family:'Bebas Neue',sans-serif;font-size:1rem;letter-spacing:0.1em;
  background:rgba(255,255,255,0.09);border:1px solid rgba(255,255,255,0.18);
  border-radius:100px;padding:4px 18px;margin-bottom:12px;
}
.lc-bw{font-size:0.83rem;color:rgba(255,255,255,0.6);line-height:1.6}
.lc-bw strong{display:block;font-size:0.94rem;color:#fff;font-weight:600}

/* benefits */
.ben-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:18px}
.ben{
  padding:30px 26px;display:flex;gap:18px;align-items:flex-start;
  transition:all 0.4s cubic-bezier(0.4,0,0.2,1);
  position:relative;overflow:hidden;
}
.ben::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(135deg,rgba(232,0,90,0.05),transparent);
  opacity:0;transition:opacity 0.4s;
}
.ben:hover{transform:translateY(-5px);border-color:rgba(232,0,90,0.3)}
.ben:hover::before{opacity:1}
.ben-ico{
  width:52px;height:52px;flex-shrink:0;display:grid;place-items:center;
  font-size:1.65rem;border-radius:12px;
  background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);
  transition:all 0.4s;
}
.ben:hover .ben-ico{
  background:rgba(232,0,90,0.12);border-color:rgba(232,0,90,0.25);
  transform:scale(1.1) rotate(-4deg);
}
.ben-title{font-weight:600;font-size:0.94rem;margin-bottom:5px;letter-spacing:0.01em}
.ben-desc{font-size:0.81rem;color:rgba(255,255,255,0.46);line-height:1.74;font-weight:300;font-style:italic}

/* ═══════════════════════════════════
   TIMELINE / JOURNEY
═══════════════════════════════════ */
.journey-grid{
  display:grid;grid-template-columns:repeat(4,1fr);
  overflow:hidden;border-radius:14px;border:1px solid rgba(255,255,255,0.1);
}
.jstep{
  padding:36px 24px;background:rgba(255,255,255,0.04);
  border-right:1px solid rgba(255,255,255,0.08);
  transition:all 0.4s cubic-bezier(0.4,0,0.2,1);
  position:relative;overflow:hidden;cursor:default;
}
.jstep:last-child{border-right:none}
.jstep::after{
  content:'';position:absolute;bottom:0;left:0;right:0;height:2.5px;
  background:linear-gradient(90deg,var(--pk),var(--pk2),var(--gold));
  transform:scaleX(0);transform-origin:left;transition:transform 0.5s cubic-bezier(0.4,0,0.2,1);
}
.jstep:hover{background:rgba(255,255,255,0.07)}
.jstep:hover::after{transform:scaleX(1)}
.js-num{
  font-family:'JetBrains Mono',monospace;font-size:0.58rem;letter-spacing:0.18em;
  color:rgba(255,255,255,0.26);margin-bottom:18px;
  display:flex;align-items:center;gap:8px;
}
.js-dot{
  width:9px;height:9px;border-radius:50%;
  background:rgba(255,255,255,0.4);flex-shrink:0;
  box-shadow:0 0 6px rgba(255,255,255,0.3);
}
.js-dot.now{
  background:var(--gold);
  box-shadow:0 0 0 3px rgba(245,197,24,0.2),0 0 12px rgba(245,197,24,0.6);
  animation:dotPulse 2s ease-in-out infinite;
}
@keyframes dotPulse{
  0%,100%{box-shadow:0 0 0 3px rgba(245,197,24,0.2),0 0 12px rgba(245,197,24,0.6)}
  50%{box-shadow:0 0 0 6px rgba(245,197,24,0.1),0 0 24px rgba(245,197,24,0.8)}
}
.js-title{font-family:'Bebas Neue',sans-serif;font-size:1.1rem;letter-spacing:0.06em;margin-bottom:8px;color:#fff}
.js-date{font-family:'JetBrains Mono',monospace;font-size:0.63rem;letter-spacing:0.1em;color:rgba(255,255,255,0.32);margin-bottom:10px}
.js-desc{font-size:0.79rem;color:rgba(255,255,255,0.44);line-height:1.7;font-weight:300;font-style:italic}
.js-live{
  display:inline-flex;align-items:center;gap:6px;margin-top:14px;
  font-family:'JetBrains Mono',monospace;font-size:0.57rem;letter-spacing:0.12em;
  color:var(--gold);
}
.live-dot{
  width:6px;height:6px;border-radius:50%;background:var(--gold);
  animation:liveBlink 1.2s ease-in-out infinite;
}
@keyframes liveBlink{0%,100%{opacity:1;transform:scale(1)}50%{opacity:0.4;transform:scale(0.8)}}

/* ═══════════════════════════════════
   ROADSHOW TABLE
═══════════════════════════════════ */
.rtable{width:100%;border-collapse:collapse}
.rtable thead th{
  font-family:'JetBrains Mono',monospace;font-weight:500;
  font-size:0.58rem;letter-spacing:0.22em;text-transform:uppercase;
  color:rgba(255,255,255,0.3);padding:14px 22px;text-align:left;
  border-bottom:1px solid rgba(255,255,255,0.08);
}
.rtable tbody tr{
  border-bottom:1px solid rgba(255,255,255,0.06);
  transition:background 0.3s;
}
.rtable tbody tr:last-child{border-bottom:none}
.rtable tbody tr:hover{background:rgba(255,255,255,0.04)}
.rtable td{padding:18px 22px;vertical-align:middle}
.r-region{font-family:'Bebas Neue',sans-serif;font-size:1.1rem;letter-spacing:0.06em}
.bdg{display:inline-block;padding:4px 13px;border-radius:100px;font-family:'JetBrains Mono',monospace;font-size:0.58rem;letter-spacing:0.08em}
.bdg-w{background:rgba(255,255,255,0.09);border:1px solid rgba(255,255,255,0.2);color:#fff}
.bdg-b{background:rgba(100,200,255,0.07);border:1px solid rgba(100,200,255,0.2);color:#99d6ff}
.bdg-t{background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.09);color:rgba(255,255,255,0.28)}
.bdg-up{background:rgba(232,0,90,0.1);border:1px solid rgba(232,0,90,0.25);color:rgba(255,130,170,0.9)}
.r-ven{font-size:0.79rem;color:rgba(255,255,255,0.28);font-style:italic}

/* ═══════════════════════════════════
   RULES
═══════════════════════════════════ */
.rules-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
.rc{padding:32px 26px;transition:all 0.4s cubic-bezier(0.4,0,0.2,1)}
.rc:hover{transform:translateY(-5px);border-color:rgba(232,0,90,0.28)}
.rc-title{
  font-family:'Bebas Neue',sans-serif;font-size:1.05rem;letter-spacing:0.08em;
  margin-bottom:18px;padding-bottom:14px;
  border-bottom:1px solid rgba(255,255,255,0.09);
  display:flex;align-items:center;gap:10px;color:#fff;
}
.rc-list{display:flex;flex-direction:column;gap:11px}
.rc-item{
  display:flex;gap:10px;font-size:0.79rem;
  color:rgba(255,255,255,0.5);line-height:1.66;font-weight:300;
}
.rc-item::before{
  content:'—';color:rgba(232,0,90,0.45);flex-shrink:0;font-weight:700;
  line-height:1.66;
}

/* ═══════════════════════════════════
   ABOUT
═══════════════════════════════════ */
.about-split{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.asg{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.as{
  padding:26px 22px;text-align:center;
  transition:all 0.4s cubic-bezier(0.4,0,0.2,1);
  position:relative;overflow:hidden;
}
.as::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse at center bottom,rgba(232,0,90,0.08),transparent 65%);
  opacity:0;transition:opacity 0.4s;
}
.as:hover{transform:translateY(-5px);border-color:rgba(232,0,90,0.32)}
.as:hover::before{opacity:1}
.as-val{font-family:'Bebas Neue',sans-serif;font-size:2.2rem;letter-spacing:0.06em;color:#fff;margin-bottom:5px}
.as-lbl{font-family:'JetBrains Mono',monospace;font-size:0.58rem;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.32);line-height:1.55}
.at p{color:rgba(255,255,255,0.52);line-height:1.88;font-size:0.9rem;margin-bottom:14px;font-weight:300;font-style:italic}
.ict-tag{
  display:inline-flex;align-items:center;gap:8px;
  background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);
  border-radius:8px;padding:10px 16px;
  font-family:'JetBrains Mono',monospace;font-size:0.63rem;letter-spacing:0.1em;
  margin-bottom:28px;color:rgba(255,255,255,0.62);
}

/* ═══════════════════════════════════
   CTA BANNER
═══════════════════════════════════ */
.cta-sec{
  position:relative;z-index:2;
  padding:100px 48px;text-align:center;
  overflow:hidden;
  background:linear-gradient(180deg,rgba(30,0,14,0.5),rgba(24,0,10,0.9));
  border-top:1px solid rgba(255,255,255,0.07);
}
.cta-bg-text{
  position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
  font-family:'Bebas Neue',sans-serif;font-size:20rem;letter-spacing:0.04em;
  color:rgba(255,255,255,0.015);white-space:nowrap;pointer-events:none;
  animation:ctaBgDrift 15s ease-in-out infinite;
}
@keyframes ctaBgDrift{
  0%,100%{transform:translate(-50%,-50%) scale(1)}
  50%{transform:translate(-50%,-52%) scale(1.02)}
}
.cta-sec .sec-title{font-size:clamp(2.5rem,6vw,5rem);margin-bottom:14px;position:relative;z-index:1}
.cta-sec>p{color:rgba(255,255,255,0.46);max-width:500px;margin:0 auto 40px;font-style:italic;line-height:1.84;position:relative;z-index:1}
.dl-row{margin-top:24px;display:flex;gap:24px;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}
.dl-item{
  font-family:'JetBrains Mono',monospace;font-size:0.63rem;letter-spacing:0.1em;
  color:rgba(255,255,255,0.28);display:flex;align-items:center;gap:6px;
}
.dl-item::before{content:'//';color:rgba(232,0,90,0.4);font-weight:500}

/* ═══════════════════════════════════
   FOOTER
═══════════════════════════════════ */
footer{
  position:relative;z-index:2;padding:36px 48px;
  border-top:1px solid rgba(255,255,255,0.06);
  background:rgba(20,0,10,0.85);
  display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;
}
.f-brand{font-family:'Bebas Neue',sans-serif;font-size:0.95rem;letter-spacing:0.1em;color:rgba(255,255,255,0.55)}
.f-copy{font-family:'JetBrains Mono',monospace;font-size:0.58rem;letter-spacing:0.1em;color:rgba(255,255,255,0.22)}
.f-links{display:flex;gap:20px}
.f-links a{font-family:'JetBrains Mono',monospace;font-size:0.6rem;letter-spacing:0.08em;color:rgba(255,255,255,0.28);text-decoration:none;transition:color 0.25s}
.f-links a:hover{color:rgba(255,255,255,0.75)}

/* ═══════════════════════════════════
   KEYFRAMES (shared)
═══════════════════════════════════ */
@keyframes fadeSlideUp{
  0%{opacity:0;transform:translateY(20px)}
  100%{opacity:1;transform:translateY(0)}
}
@keyframes fadeSlideDown{
  0%{opacity:0;transform:translateY(-14px)}
  100%{opacity:1;transform:translateY(0)}
}
@keyframes fadeIn{
  0%{opacity:0}100%{opacity:1}
}

/* ═══════════════════════════════════
   FADE-UP SCROLL
═══════════════════════════════════ */
.fu{opacity:0;transform:translateY(22px);transition:opacity 0.7s cubic-bezier(0.22,1,0.36,1),transform 0.7s cubic-bezier(0.22,1,0.36,1)}
.fu.in{opacity:1;transform:translateY(0)}

/* ═══════════════════════════════════
   RESPONSIVE
═══════════════════════════════════ */
@media(max-width:1000px){
  .journey-grid{grid-template-columns:1fr 1fr}
  .about-split{grid-template-columns:1fr;gap:40px}
  .podium{flex-direction:column;align-items:center}
  .pw{max-width:380px;width:100%}
}
@media(max-width:768px){
  nav{padding:0 20px}
  .nav-links{display:none}
  .sec{padding:64px 24px}
  #partners{padding:44px 24px}
  .hero{padding:100px 24px 64px}
  .ben-grid,.rules-grid,.lower,.partners-grid{grid-template-columns:1fr}
  .journey-grid{grid-template-columns:1fr}
  .hero-bar{flex-direction:column;border:none;gap:2px}
  .hb-item{border-right:none;border:1px solid rgba(255,255,255,0.09);border-radius:10px}
  footer{flex-direction:column;text-align:center}
  .divider{margin:0 24px}
  .about-split{gap:36px}
}

/* ══════════════════════════════════
   FONT VISIBILITY OVERRIDES
   - Remove all font-style:italic from body copy
   - Boost all muted text opacities
   - Increase body font sizes
   - Improve contrast on labels, badges, descriptions
══════════════════════════════════ */

/* Global: no italic anywhere by default */
body, .sec-sub, .hero-desc, .ben-desc, .js-desc, .at p,
.r-ven, .p-bw, .js-date, .rc-item, .lc-bw {
  font-style: normal !important;
}

/* Hero description - much more visible */
.hero-desc {
  color: rgba(255,255,255,0.82) !important;
  font-size: 1.08rem !important;
  font-weight: 400 !important;
  line-height: 1.78 !important;
}

/* Kicker line */
.hero-kicker {
  color: rgba(255,255,255,0.6) !important;
  font-size: 0.76rem !important;
  letter-spacing: 0.24em !important;
}

/* Stats bar */
.hb-val {
  font-size: 2.3rem !important;
}
.hb-lbl {
  color: rgba(255,255,255,0.55) !important;
  font-size: 0.62rem !important;
  letter-spacing: 0.12em !important;
}

/* Countdown */
.cd-label {
  color: rgba(255,255,255,0.52) !important;
  font-size: 0.64rem !important;
}
.cd-sub {
  color: rgba(255,255,255,0.48) !important;
  font-size: 0.56rem !important;
}

/* Section tags */
.mono-tag {
  color: rgba(255,255,255,0.52) !important;
  font-size: 0.64rem !important;
}

/* Section subtitles - main pain point */
.sec-sub {
  color: rgba(255,255,255,0.72) !important;
  font-size: 0.97rem !important;
  font-weight: 400 !important;
  line-height: 1.80 !important;
}

/* Section titles */
.sec-title {
  color: #ffffff !important;
}

/* Prize pool label */
.pool-lbl {
  color: rgba(255,255,255,0.55) !important;
  font-size: 0.7rem !important;
  letter-spacing: 0.2em !important;
}

/* Podium labels */
.pw-lbl {
  color: rgba(255,255,255,0.62) !important;
  font-size: 0.67rem !important;
}

/* Prize bandwidth text */
.p-bw {
  font-size: 0.84rem !important;
  color: rgba(255,255,255,0.7) !important;
  line-height: 1.6 !important;
}
.p-bw strong {
  color: rgba(255,255,255,0.95) !important;
}

/* Lower prize cards */
.lc-bw {
  font-size: 0.88rem !important;
  color: rgba(255,255,255,0.75) !important;
}
.lc-bw strong {
  color: #ffffff !important;
  font-size: 1rem !important;
}

/* Benefits */
.ben-title {
  font-size: 1rem !important;
  font-weight: 600 !important;
  color: #ffffff !important;
}
.ben-desc {
  font-size: 0.87rem !important;
  color: rgba(255,255,255,0.72) !important;
  line-height: 1.72 !important;
  font-weight: 300 !important;
}

/* Journey / Timeline */
.js-num {
  color: rgba(255,255,255,0.48) !important;
  font-size: 0.62rem !important;
}
.js-title {
  font-size: 1.15rem !important;
  color: #ffffff !important;
  margin-bottom: 10px !important;
}
.js-date {
  color: rgba(255,255,255,0.55) !important;
  font-size: 0.68rem !important;
}
.js-desc {
  font-size: 0.84rem !important;
  color: rgba(255,255,255,0.72) !important;
  line-height: 1.68 !important;
  font-weight: 300 !important;
}
.js-live {
  font-size: 0.62rem !important;
  color: var(--gold) !important;
  opacity: 1 !important;
}

/* Roadshow table */
.rtable thead th {
  color: rgba(255,255,255,0.52) !important;
  font-size: 0.63rem !important;
  letter-spacing: 0.18em !important;
}
.r-region {
  font-size: 1.15rem !important;
  color: #ffffff !important;
}
.bdg {
  font-size: 0.65rem !important;
}
.bdg-w { color: #ffffff !important; }
.bdg-b { color: #bde8ff !important; }
.bdg-t { color: rgba(255,255,255,0.5) !important; }
.bdg-up { color: rgba(255,160,190,1) !important; }
.r-ven {
  font-size: 0.84rem !important;
  color: rgba(255,255,255,0.5) !important;
}

/* Rules */
.rc-title {
  font-size: 1.1rem !important;
  color: #ffffff !important;
  letter-spacing: 0.06em !important;
}
.rc-item {
  font-size: 0.85rem !important;
  color: rgba(255,255,255,0.75) !important;
  line-height: 1.64 !important;
  font-weight: 300 !important;
}
.rc-item::before {
  color: rgba(232,0,90,0.7) !important;
}

/* About */
.at p {
  font-size: 0.95rem !important;
  color: rgba(255,255,255,0.78) !important;
  line-height: 1.84 !important;
  font-weight: 300 !important;
}
.ict-tag {
  color: rgba(255,255,255,0.82) !important;
  font-size: 0.68rem !important;
}
.as-val {
  color: #ffffff !important;
  font-size: 2.3rem !important;
}
.as-lbl {
  color: rgba(255,255,255,0.55) !important;
  font-size: 0.62rem !important;
  line-height: 1.6 !important;
}

/* CTA */
.cta-sec > p {
  font-style: normal !important;
  color: rgba(255,255,255,0.72) !important;
  font-size: 1rem !important;
}
.dl-item {
  color: rgba(255,255,255,0.5) !important;
  font-size: 0.68rem !important;
}

/* Partners */
.partners-hd {
  color: rgba(255,255,255,0.5) !important;
  font-size: 0.65rem !important;
  letter-spacing: 0.24em !important;
}
.p-name {
  font-size: 0.96rem !important;
  color: rgba(255,255,255,0.85) !important;
}
.partner-card:hover .p-name {
  color: #ffffff !important;
}

/* Footer */
.f-brand {
  color: rgba(255,255,255,0.72) !important;
  font-size: 0.9rem !important;
}
.f-copy {
  color: rgba(255,255,255,0.42) !important;
  font-size: 0.63rem !important;
}
.f-links a {
  color: rgba(255,255,255,0.5) !important;
  font-size: 0.65rem !important;
}

/* Scroll hint */
.scroll-hint span {
  color: rgba(255,255,255,0.4) !important;
  font-size: 0.6rem !important;
}

/* Nav links */
.nav-links a {
  color: rgba(255,255,255,0.78) !important;
  font-size: 0.84rem !important;
}
.nav-links a:hover {
  color: #ffffff !important;
}

</style>
</head>
<body>

<!-- CANVAS BG -->
<canvas id="bg-canvas"></canvas>

<!-- AURORA -->
<div class="aurora">
  <div class="aurora-band ab1"></div>
  <div class="aurora-band ab2"></div>
  <div class="aurora-band ab3"></div>
  <div class="aurora-band ab4"></div>
</div>

<!-- NAV -->
<nav id="nav">
  <div class="nav-logo">
    <img src="{{asset('assets/images/national_andriod_bootcamp_logo.png')}}" alt="NADB Logo">
  </div>
  <div class="nav-links">
    <a href="#overview">Overview</a>
    <a href="#prizes">Prizes</a>
    <a href="#timeline">Timeline</a>
    <a href="#rules">Rules</a>
    <a href="#about">About</a>
    <a href="#register" class="nav-cta">Register Now</a>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="overview">
  <div class="hero-rings">
    <div class="ring"></div><div class="ring"></div>
    <div class="ring"></div><div class="ring"></div>
  </div>
  <div class="hero-content">
    <div class="hero-kicker">bdapps &nbsp;·&nbsp; 2026 &nbsp;·&nbsp; Skill Bangladesh</div>
    <div class="hero-logo-wrap">
      <img src="{{asset('assets/images/national_andriod_bootcamp_logo.png')}}" alt="National Android Development Bootcamp" class="hero-logo-img">
    </div>
    <p class="hero-desc">Two months of elite technical and business training. 150 developers. One national stage. Join the program shaping the next generation of Bangladeshi app builders.</p>
    <div class="hero-bar">
      <div class="hb-item"><div class="hb-val">150</div><div class="hb-lbl">Seats</div></div>
      <div class="hb-item"><div class="hb-val">৳5L</div><div class="hb-lbl">Prize Pool</div></div>
      <div class="hb-item"><div class="hb-val">2</div><div class="hb-lbl">Months Training</div></div>
      <div class="hb-item"><div class="hb-val" id="cd-d-hero">--</div><div class="hb-lbl">Days Left</div></div>
    </div>
    <div class="cd-wrap">
      <div class="cd-label">// Registration closes April 30, 2026</div>
      <div class="cd-row">
        <div class="cd-box"><span class="cd-num" id="cd-d">00</span><span class="cd-sub">Days</span></div>
        <div class="cd-colon">:</div>
        <div class="cd-box"><span class="cd-num" id="cd-h">00</span><span class="cd-sub">Hrs</span></div>
        <div class="cd-colon">:</div>
        <div class="cd-box"><span class="cd-num" id="cd-m">00</span><span class="cd-sub">Min</span></div>
        <div class="cd-colon">:</div>
        <div class="cd-box"><span class="cd-num" id="cd-s">00</span><span class="cd-sub">Sec</span></div>
      </div>
    </div>
    <div class="hero-btns">
      <a href="nadb-register.html" target="_blank" class="btn-pk">Apply Now — Free Registration</a>
      <a href="#prizes" class="btn-ol">Explore Prizes ↓</a>
    </div>
    <div class="scroll-hint">
      <div class="scroll-arrow"></div>
      <span>Scroll to explore</span>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- PARTNERS -->
<section id="partners">
  <div class="partners-inner">
    <div class="partners-hd">Supported By</div>
    <div class="partners-grid">
      <div class="partner-card fu">
        <div class="partner-logo-area">
          <img src="{{asset('assets/images/robie.svg')}}" alt="Robi Axiata PLC">
        </div>
        <div class="partner-meta">
          <div class="p-name">Robi Axiata PLC</div>
        </div>
      </div>
      
       <div class="partner-card fu">
        <div class="partner-logo-area">
          <img src="{{asset('assets/images/miaki.png')}}" alt="Miaki Media Ltd.">
        </div>
        <div class="partner-meta">
          <div class="p-name">Miaki Media Ltd.</div>
        </div>
      </div>
      
      <div class="partner-card fu">
        <div class="partner-logo-area">
          <img src="{{asset('assets/images/hsenid (1).png')}}" alt="hSenid Mobile Solutions">
        </div>
        <div class="partner-meta">
          <div class="p-name">hSenid Mobile Solutions</div>
        </div>
      </div>
     
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- PRIZES -->
<section class="sec" id="prizes">
  <div class="wrap">
    <div class="sec-hd center">
      <span class="mono-tag">// Prizes &amp; Benefits</span>
      <h2 class="sec-title">Win Big.<br>Build Bigger.</h2>
      <p class="sec-sub">Top performers earn cash prizes, promotional bandwidth worth lakhs, and national recognition across Robi and Airtel platforms reaching millions of users.</p>
    </div>
    <div class="pool-strip g fu">
      <div class="pool-num">৳ 5,00,000</div>
      <div class="pool-lbl">// Total Prize Pool</div>
    </div>
    <div class="podium">
      <div class="pw" style="margin-bottom:52px">
        <div class="pw-lbl">// 1st Runner Up</div>
        <div class="pc fu">
          <div class="medal m-silver">2</div>
          <div class="p-amt">৳ 30,000</div>
          <div class="p-bw">+ <strong>৳50,000 worth</strong><br>Promotional Bandwidth</div>
        </div>
      </div>
      <div class="pw" style="z-index:2">
        <div class="pw-lbl" style="opacity:0">x</div>
        <div class="pc champ fu">
          <svg class="trophy" viewBox="0 0 80 80" fill="none">
            <defs><linearGradient id="tg" x1="16" y1="6" x2="64" y2="52" gradientUnits="userSpaceOnUse"><stop stop-color="#FFD700"/><stop offset="1" stop-color="#FFA000"/></linearGradient></defs>
            <path d="M40 5L48 26H66L51 37L57 58L40 47L23 58L29 37L14 26H32Z" fill="url(#tg)" opacity="0.96"/>
            <rect x="33" y="60" width="14" height="8" fill="#FFB300" opacity="0.8"/>
            <rect x="24" y="68" width="32" height="5" rx="2.5" fill="#FFA000" opacity="0.85"/>
            <rect x="28" y="73" width="24" height="4" rx="2" fill="#FF8F00" opacity="0.6"/>
            <path d="M14 28Q0 28 0 42Q0 56 14 56" stroke="#FFD700" stroke-width="2.5" fill="none" opacity="0.55" stroke-linecap="round"/>
            <path d="M66 28Q80 28 80 42Q80 56 66 56" stroke="#FFD700" stroke-width="2.5" fill="none" opacity="0.55" stroke-linecap="round"/>
          </svg>
          <div class="champ-pill">CHAMPION</div>
          <div class="p-amt" style="font-size:clamp(3rem,6vw,4.2rem)">৳ 50,000</div>
          <div class="p-bw" style="margin-top:14px">+ <strong>৳50,000 worth</strong><br>Promotional Bandwidth</div>
        </div>
      </div>
      <div class="pw" style="margin-bottom:92px">
        <div class="pw-lbl">// 2nd Runner Up</div>
        <div class="pc fu">
          <div class="medal m-bronze">3</div>
          <div class="p-amt">৳ 20,000</div>
          <div class="p-bw">+ <strong>৳50,000 worth</strong><br>Promotional Bandwidth</div>
        </div>
      </div>
    </div>
    <div class="lower">
      <div class="lc g fu"><div class="lc-rank">4th</div><div class="lc-bw"><strong>৳50,000 worth</strong>Promotional Bandwidth</div></div>
      <div class="lc g fu"><div class="lc-rank">5th</div><div class="lc-bw"><strong>৳50,000 worth</strong>Promotional Bandwidth</div></div>
      <div class="lc g fu"><div class="lc-rank">6th – 10th</div><div class="lc-bw"><strong>৳30,000 worth each</strong>Promotional Bandwidth</div></div>
    </div>
    <h3 style="font-family:'Bebas Neue',sans-serif;font-size:1.6rem;letter-spacing:0.06em;text-align:center;color:rgba(255,255,255,0.48);margin:64px 0 0">All Participants Receive</h3>
    <div class="ben-grid">
      <div class="ben g fu"><div class="ben-ico">🎓</div><div><div class="ben-title">Robi-Endorsed Certificate</div><div class="ben-desc">Graduate as a certified Android developer endorsed by Robi — a standout credential for any developer portfolio.</div></div></div>
      <div class="ben g fu"><div class="ben-ico">👥</div><div><div class="ben-title">Developer Network</div><div class="ben-desc">Access Bangladesh's largest developer community and network with leading industry professionals.</div></div></div>
      <div class="ben g fu"><div class="ben-ico">💰</div><div><div class="ben-title">Monetization Support</div><div class="ben-desc">Logistical support to publish and monetize your application through the National App Store of Bangladesh.</div></div></div>
      <div class="ben g fu"><div class="ben-ico">🏛️</div><div><div class="ben-title">National Exposure</div><div class="ben-desc">Present before the country's administrative and business leaders at the national-level Gala Round.</div></div></div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- TIMELINE -->
<section class="sec" id="timeline">
  <div class="wrap">
    <div class="sec-hd center">
      <span class="mono-tag">// Program Journey</span>
      <h2 class="sec-title">Four Phases.<br>One Destination.</h2>
      <p class="sec-sub">A structured path from registration through training to the national stage — every phase builds on the last.</p>
    </div>
    <div class="journey-grid fu">
      <div class="jstep">
        <div class="js-num"><div class="js-dot now"></div>Phase 01</div>
        <div class="js-title">Roadshows &amp; Registration</div>
        <div class="js-date">8 April — 30 April 2026</div>
        <div class="js-desc">Offline and online roadshows across Bangladesh. Register free. bdapps shortlists 150 developers through interviews.</div>
        <div class="js-live"><div class="live-dot"></div>Active Now</div>
      </div>
      <div class="jstep">
        <div class="js-num"><div class="js-dot"></div>Phase 02</div>
        <div class="js-title">Technical Training</div>
        <div class="js-date">TBA</div>
        <div class="js-desc">Two months of intensive online training by industry professionals, covering Android development from fundamentals to advanced.</div>
      </div>
      <div class="jstep">
        <div class="js-num"><div class="js-dot"></div>Phase 03</div>
        <div class="js-title">Business Training</div>
        <div class="js-date">TBA</div>
        <div class="js-desc">Learn app monetization, the bdapps ecosystem, API integration, and how to build a sustainable developer business.</div>
      </div>
      <div class="jstep">
        <div class="js-num"><div class="js-dot"></div>Phase 04</div>
        <div class="js-title">Gala Round</div>
        <div class="js-date">TBA</div>
        <div class="js-desc">The grand finale. Present your app before national leaders, judges, and peers. Winners announced at the awards ceremony.</div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ROADSHOWS -->
<section class="sec">
  <div class="wrap">
    <div class="sec-hd center">
      <span class="mono-tag">// Roadshow Schedule</span>
      <h2 class="sec-title">Coming to<br>Your Region.</h2>
      <p class="sec-sub">Attend an offline event near you or join the online session for your division. All sessions run before the April 30 deadline.</p>
    </div>
    <div class="g fu" style="overflow:hidden">
      <table class="rtable">
        <thead><tr><th>Region</th><th>Date</th><th>Format</th><th>Venue</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td><span class="r-region">Rajshahi</span></td><td><span class="bdg bdg-w">16 Apr 2026</span></td><td><span class="bdg bdg-w">Offline</span></td><td><span class="r-ven">To Be Announced</span></td><td><span class="bdg bdg-up">Upcoming</span></td></tr>
          <tr><td><span class="r-region">Dhaka</span></td><td><span class="bdg bdg-w">23 Apr 2026</span></td><td><span class="bdg bdg-w">Offline</span></td><td><span class="r-ven">To Be Announced</span></td><td><span class="bdg bdg-up">Upcoming</span></td></tr>
          <tr><td><span class="r-region">Chittagong</span></td><td><span class="bdg bdg-w">24 Apr 2026</span></td><td><span class="bdg bdg-w">Offline</span></td><td><span class="r-ven">To Be Announced</span></td><td><span class="bdg bdg-up">Upcoming</span></td></tr>
          <tr><td><span class="r-region">Sylhet</span></td><td><span class="bdg bdg-t">TBA</span></td><td><span class="bdg bdg-b">Online</span></td><td><span class="r-ven">Virtual Platform</span></td><td><span class="bdg bdg-t">TBA</span></td></tr>
          <tr><td><span class="r-region">Khulna</span></td><td><span class="bdg bdg-t">TBA</span></td><td><span class="bdg bdg-b">Online</span></td><td><span class="r-ven">Virtual Platform</span></td><td><span class="bdg bdg-t">TBA</span></td></tr>
          <tr><td><span class="r-region">Barisal</span></td><td><span class="bdg bdg-t">TBA</span></td><td><span class="bdg bdg-b">Online</span></td><td><span class="r-ven">Virtual Platform</span></td><td><span class="bdg bdg-t">TBA</span></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- RULES -->
<section class="sec" id="rules">
  <div class="wrap">
    <div class="sec-hd center">
      <span class="mono-tag">// Rules &amp; Guidelines</span>
      <h2 class="sec-title">Who Can Apply?</h2>
      <p class="sec-sub">Open to all Bangladeshi citizens — no age, gender, religion, or education restrictions. Anyone with passion can join.</p>
    </div>
    <div class="rules-grid">
      <div class="rc g fu">
        <div class="rc-title">◈ Eligibility</div>
        <div class="rc-list">
          <div class="rc-item">All Bangladeshi citizens regardless of age, gender, religion or educational background.</div>
          <div class="rc-item">Individual applications only — no team registrations permitted.</div>
          <div class="rc-item">Must have access to a personal laptop or desktop computer.</div>
          <div class="rc-item">Broadband internet or wifi required throughout the program.</div>
          <div class="rc-item">Own travel and accommodation during the Gala Round.</div>
        </div>
      </div>
      <div class="rc g fu">
        <div class="rc-title">◈ Registration &amp; Selection</div>
        <div class="rc-list">
          <div class="rc-item">Registration is completely free of charge.</div>
          <div class="rc-item">Candidates with programming or app development experience will be given preference.</div>
          <div class="rc-item">All applicants must complete an interview and sign a consent form for the full program.</div>
          <div class="rc-item">By registering, participants agree to all NADB Rules and Guidelines.</div>
        </div>
      </div>
      <div class="rc g fu">
        <div class="rc-title">◈ Miscellaneous</div>
        <div class="rc-list">
          <div class="rc-item">All intellectual property of ideas and code belongs to the participants.</div>
          <div class="rc-item">Prize money distributed in milestone-based tranches.</div>
          <div class="rc-item">bdapps reserves the right to change program provisions without prior notice.</div>
          <div class="rc-item">Top apps featured in My Robi and My Airtel App showcase sections.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ABOUT -->
<section class="sec" id="about">
  <div class="wrap">
    <div class="sec-hd center">
      <span class="mono-tag">// About bdapps</span>
      <h2 class="sec-title">Bangladesh's National<br>App Platform</h2>
    </div>
    <div class="about-split">
      <div class="at fu">
        <p>bdapps is a local app store and API hub enabling content providers and developers to monetize their applications. It offers powerful APIs — SMS, USSD, OTP, Subscription, CAAS, and more — alongside 24/7 developer and admin support.</p>
        <p>Both downloadable and non-downloadable apps can be monetized through the platform, with seamless integration into Robi and Airtel's ecosystem reaching millions of Bangladeshi users.</p>
        <div class="ict-tag">🏛️ Declared National App Store of Bangladesh by ICT Division — 2021</div><br>
        <a href="#register" class="btn-pk" style="font-size:0.88rem;padding:13px 34px">Join the Community</a>
      </div>
      <div class="fu">
        <div class="asg">
          <div class="as g"><div class="as-val">#1</div><div class="as-lbl">Largest developer<br>community in Bangladesh</div></div>
          <div class="as g"><div class="as-val">2021</div><div class="as-lbl">Declared National<br>App Store by ICT Division</div></div>
          <div class="as g"><div class="as-val">24/7</div><div class="as-lbl">Developer &amp; admin<br>support available</div></div>
          <div class="as g"><div class="as-val">API+</div><div class="as-lbl">SMS, USSD, OTP,<br>Subscription &amp; more</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<div class="cta-sec" id="register">
  <div class="cta-bg-text">REGISTER</div>
  <span class="mono-tag" style="display:block;margin-bottom:16px;position:relative;z-index:1">// Start Your Journey</span>
  <h2 class="sec-title" style="position:relative;z-index:1">Ready to Build<br>Skill Bangladesh?</h2>
  <p style="position:relative;z-index:1">150 spots. Free training. ৳5 lakh in prizes. No experience required. Registration closes April 30, 2026.</p>
  <a href="registration" target="_blank" class="btn-pk" style="font-size:0.92rem;padding:16px 52px;position:relative;z-index:1">Apply Now — Registration is Free</a>
  <div class="dl-row">
    <div class="dl-item">Individual applications only</div>
    <div class="dl-item">Completely free of charge</div>
    <div class="dl-item">Deadline April 30, 2026</div>
    <div class="dl-item">150 seats nationwide</div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="f-brand">NATIONAL ANDROID DEVELOPMENT BOOTCAMP · BDAPPS · 2026</div>
  <div class="f-copy">© 2026 bdapps · Robi Axiata PLC.</div>
  <div class="f-links">
    <a href="#">Privacy</a>
    <a href="#">Terms</a>
    <!--<a href="https://bdapps-nadb.com/" target="_blank">Official Site ↗</a>-->
  </div>
</footer>

<script>
/* ── CANVAS BG: layered gradient + wave mesh + soft particles ── */
const cv=document.getElementById('bg-canvas');
const cx=cv.getContext('2d');
let W,H;
function resize(){W=cv.width=window.innerWidth;H=cv.height=window.innerHeight}
resize();window.addEventListener('resize',resize);

let t=0;

/* Gradient background */
function drawBg(){
  const g=cx.createLinearGradient(0,0,W,H);
  g.addColorStop(0,'#3D0020');
  g.addColorStop(0.5,'#6B003A');
  g.addColorStop(1,'#B50060');
  cx.fillStyle=g;cx.fillRect(0,0,W,H);
}

/* Breathable wave mesh */
function drawMesh(){
  const cols=Math.ceil(W/90)+1,rows=Math.ceil(H/90)+1;
  cx.lineWidth=0.6;
  for(let r=0;r<=rows;r++){
    cx.beginPath();
    for(let c=0;c<=cols;c++){
      const x=c*90;
      const y=r*90+Math.sin(t*0.6+c*0.35+r*0.1)*7;
      c===0?cx.moveTo(x,y):cx.lineTo(x,y);
    }
    const alpha=0.028+Math.sin(t*0.4+r*0.25)*0.012;
    cx.strokeStyle=`rgba(255,255,255,${alpha})`;
    cx.stroke();
  }
  for(let c=0;c<=cols;c++){
    cx.beginPath();
    for(let r=0;r<=rows;r++){
      const x=c*90+Math.sin(t*0.5+r*0.3+c*0.1)*7;
      const y=r*90;
      r===0?cx.moveTo(x,y):cx.lineTo(x,y);
    }
    const alpha=0.028+Math.sin(t*0.4+c*0.25)*0.012;
    cx.strokeStyle=`rgba(255,255,255,${alpha})`;
    cx.stroke();
  }
}

/* Soft glowing orbs */
class Orb{
  constructor(){this.reset()}
  reset(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.r=Math.random()*180+80;
    this.phase=Math.random()*Math.PI*2;
    this.speed=Math.random()*0.004+0.002;
    this.baseAlpha=Math.random()*0.06+0.02;
    this.hue=Math.random()>0.5?'232,0,90':'180,0,80';
    this.vx=(Math.random()-0.5)*0.15;this.vy=(Math.random()-0.5)*0.1;
  }
  draw(){
    this.phase+=this.speed;
    this.x+=this.vx;this.y+=this.vy;
    if(this.x<-300||this.x>W+300||this.y<-300||this.y>H+300)this.reset();
    const alpha=this.baseAlpha*(0.6+0.4*Math.sin(this.phase));
    const g=cx.createRadialGradient(this.x,this.y,0,this.x,this.y,this.r);
    g.addColorStop(0,`rgba(${this.hue},${alpha})`);
    g.addColorStop(1,`rgba(${this.hue},0)`);
    cx.fillStyle=g;cx.beginPath();cx.arc(this.x,this.y,this.r,0,Math.PI*2);cx.fill();
  }
}

/* Rising micro-particles */
class Particle{
  constructor(){this.reset()}
  reset(){
    this.x=Math.random()*W;this.y=H+10;
    this.r=Math.random()*1.8+0.4;
    this.vy=-(Math.random()*0.4+0.08);
    this.vx=(Math.random()-0.5)*0.12;
    this.alpha=Math.random()*0.22+0.04;
    this.hue=Math.random()>0.5?'232,0,90':'245,197,24';
    this.life=0;this.maxLife=Math.random()*600+200;
  }
  draw(){
    this.x+=this.vx;this.y+=this.vy;this.life++;
    const fade=Math.sin((this.life/this.maxLife)*Math.PI);
    cx.beginPath();cx.arc(this.x,this.y,this.r,0,Math.PI*2);
    cx.fillStyle=`rgba(${this.hue},${this.alpha*fade})`;cx.fill();
    if(this.life>this.maxLife)this.reset();
  }
}

/* Shooting streaks */
class Streak{
  constructor(){this.reset()}
  reset(){
    this.x=Math.random()*W*1.2-W*0.1;
    this.y=Math.random()*H*0.6-100;
    this.len=Math.random()*100+60;
    this.angle=Math.PI/4+Math.random()*0.5-0.25;
    this.speed=Math.random()*3+1.5;
    this.alpha=0;this.life=0;
    this.maxLife=Math.random()*60+40;
    this.w=Math.random()*0.8+0.3;
    this.delay=Math.random()*300;
  }
  draw(){
    if(this.delay>0){this.delay--;return}
    this.life++;
    const p=this.life/this.maxLife;
    this.alpha=Math.sin(p*Math.PI)*0.35;
    this.x+=Math.cos(this.angle)*this.speed;
    this.y+=Math.sin(this.angle)*this.speed;
    const tail=cx.createLinearGradient(
      this.x-Math.cos(this.angle)*this.len,
      this.y-Math.sin(this.angle)*this.len,
      this.x,this.y
    );
    tail.addColorStop(0,`rgba(255,255,255,0)`);
    tail.addColorStop(1,`rgba(255,255,255,${this.alpha})`);
    cx.save();cx.strokeStyle=tail;cx.lineWidth=this.w;
    cx.beginPath();
    cx.moveTo(this.x-Math.cos(this.angle)*this.len,this.y-Math.sin(this.angle)*this.len);
    cx.lineTo(this.x,this.y);cx.stroke();cx.restore();
    if(this.life>this.maxLife)this.reset();
  }
}

const ORBS=Array.from({length:8},()=>new Orb());
ORBS.forEach(o=>{o.x=Math.random()*W;o.y=Math.random()*H});
const PARTICLES=Array.from({length:100},()=>{const p=new Particle();p.y=Math.random()*H;p.life=Math.random()*200;return p});
const STREAKS=Array.from({length:12},()=>new Streak());

function frame(){
  t+=0.016;
  drawBg();
  ORBS.forEach(o=>o.draw());
  drawMesh();
  PARTICLES.forEach(p=>p.draw());
  STREAKS.forEach(s=>s.draw());
  requestAnimationFrame(frame);
}
frame();

/* ── COUNTDOWN with digit flip micro-animation ── */
let prevS=-1;
function tick(){
  const end=new Date('2026-04-30T23:59:59+06:00');
  const diff=end-new Date();
  if(diff<=0){['cd-d','cd-h','cd-m','cd-s'].forEach(id=>document.getElementById(id).textContent='00');return}
  const d=Math.floor(diff/86400000);
  const h=Math.floor((diff%86400000)/3600000);
  const m=Math.floor((diff%3600000)/60000);
  const s=Math.floor((diff%60000)/1000);
  const pad=n=>String(n).padStart(2,'0');
  document.getElementById('cd-d').textContent=pad(d);
  document.getElementById('cd-h').textContent=pad(h);
  document.getElementById('cd-m').textContent=pad(m);
  document.getElementById('cd-s').textContent=pad(s);
  const heroD=document.getElementById('cd-d-hero');
  if(heroD)heroD.textContent=d;
  /* tick animation on second change */
  if(s!==prevS){
    prevS=s;
    ['cd-d','cd-h','cd-m','cd-s'].forEach(id=>{
      const el=document.getElementById(id);
      el.classList.remove('tick');
      void el.offsetWidth;
      el.classList.add('tick');
      setTimeout(()=>el.classList.remove('tick'),200);
    });
  }
}
tick();setInterval(tick,1000);

/* ── NAV ── */
window.addEventListener('scroll',()=>{
  document.getElementById('nav').classList.toggle('scrolled',scrollY>60);
});

/* ── FADE-UP ── */
const obs=new IntersectionObserver(entries=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      const sibs=[...(e.target.parentElement?.children||[])];
      setTimeout(()=>e.target.classList.add('in'),sibs.indexOf(e.target)*90);
      obs.unobserve(e.target);
    }
  });
},{threshold:0.1});
document.querySelectorAll('.fu').forEach(el=>obs.observe(el));

/* ── HERO PARALLAX ── */
let mx=0.5,my=0.5;
document.addEventListener('mousemove',e=>{
  mx=e.clientX/window.innerWidth;my=e.clientY/window.innerHeight;
});
(function parallaxLoop(){
  const logo=document.querySelector('.hero-logo-img');
  const rings=document.querySelector('.hero-rings');
  if(logo){
    const dx=(mx-0.5)*10,dy=(my-0.5)*6;
    logo.style.transform=`translate(${dx*0.5}px,${dy*0.4}px)`;
    if(rings)rings.style.transform=`translate(${dx*0.15}px,${dy*0.1}px)`;
  }
  requestAnimationFrame(parallaxLoop);
})();
</script>
</body>
</html>