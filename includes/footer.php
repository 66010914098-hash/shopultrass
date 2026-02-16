</main>

<footer class="footer footer--ultra">
  <div class="container footer__grid">
    <div class="footer__brand">
      <div class="footer__title">
        <span class="footer__badge">Official</span>
        <span>© <?= date('Y') ?> <?= h(APP_NAME) ?></span>
      </div>

      <div class="footer__meta">
        <span class="chip">FB: 4สหายขายปุ๋ย</span>
        <a class="chip chip--link" href="mailto:friend4@gmail.com" aria-label="Email friend4@gmail.com">
          Gmail: friend4@gmail.com
        </a>
      </div>

      <div class="footer__hint">
        ร้านปุ๋ยครบเครื่อง • ส่งไว • ของแท้ • บริการเทพ
      </div>
    </div>

    <div class="footer__contact">
      <div class="footer__contactTitle">ติดต่อเรา</div>

      <a class="contactCard" href="tel:0610290425">
        <div class="contactIcon" aria-hidden="true">☎</div>
        <div class="contactText">
          <div class="contactLabel">โทร</div>
          <div class="contactValue">061-029-0425</div>
        </div>
      </a>

      <div class="footer__mini">
        เปิดบริการทุกวัน • ตอบแชทไว • ยินดีให้คำแนะนำ
      </div>
    </div>
  </div>

  <div class="footer__bottom">
    <div class="container footer__bottomRow">
      <div class="small muted">Made with ❤ for “4สหายขายปุ๋ย”</div>
      <div class="small muted" id="footerTime"></div>
    </div>
  </div>
</footer>

<button class="backTop" id="backTop" aria-label="Back to top">↑</button>

<style>
  /* ===== ULTRA FOOTER (GREEN THEME) ===== */
  .footer--ultra{
    position: relative;
    margin-top: 48px;
    padding: 26px 0 0;
    color: rgba(255,255,255,.92);
    background:
      radial-gradient(1200px 420px at 20% 0%, rgba(34,197,94,.18), transparent 60%),
      radial-gradient(900px 420px at 80% 20%, rgba(52,211,153,.14), transparent 60%),
      radial-gradient(700px 360px at 85% 85%, rgba(16,185,129,.10), transparent 65%),
      linear-gradient(135deg, rgba(3,17,12,.92), rgba(4,26,18,.92));
    overflow: hidden;
    border-top: 1px solid rgba(255,255,255,.14);
    backdrop-filter: blur(10px);
  }
  .footer--ultra::before{
    content:"";
    position:absolute; inset:-2px;
    background:
      radial-gradient(circle at 15% 25%, rgba(255,255,255,.18) 0 2px, transparent 3px) 0 0/24px 24px,
      radial-gradient(circle at 65% 75%, rgba(255,255,255,.12) 0 1.6px, transparent 2.6px) 0 0/28px 28px;
    opacity:.28;
    pointer-events:none;
  }

  .footer__grid{
    display:grid;
    grid-template-columns: 1.2fr .8fr;
    gap: 18px;
    padding: 18px 12px 18px;
    position:relative;
  }

  .footer__brand, .footer__contact{
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 18px;
    padding: 16px;
    box-shadow: 0 14px 34px rgba(0,0,0,.28);
    backdrop-filter: blur(12px);
  }

  .footer__title{
    display:flex; align-items:center; gap:10px;
    font-weight:800;
    letter-spacing:.2px;
    font-size: 16px;
  }
  .footer__badge{
    display:inline-flex;
    align-items:center;
    padding: 4px 10px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 800;
    background: rgba(0,0,0,.25);
    border: 1px solid rgba(255,255,255,.16);
  }

  .footer__meta{
    margin-top: 10px;
    display:flex;
    gap: 8px;
    flex-wrap: wrap;
  }

  .chip{
    display:inline-flex;
    align-items:center;
    gap: 8px;
    padding: 8px 10px;
    border-radius: 999px;
    font-size: 13px;
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.12);
    box-shadow: inset 0 0 0 1px rgba(255,255,255,.04);
  }
  .chip--link{
    text-decoration:none;
    color: rgba(255,255,255,.95);
    transition: transform .18s ease, background .18s ease, box-shadow .18s ease;
  }
  .chip--link:hover{
    transform: translateY(-1px);
    background: rgba(34,197,94,.14);
    box-shadow: 0 0 16px rgba(34,197,94,.20);
  }

  .footer__hint{
    margin-top: 10px;
    font-size: 13px;
    opacity: .88;
  }

  .footer__contactTitle{
    font-weight: 900;
    font-size: 15px;
    margin-bottom: 10px;
  }

  .contactCard{
    display:flex;
    gap: 12px;
    align-items:center;
    padding: 12px 12px;
    border-radius: 14px;
    text-decoration:none;
    color: rgba(255,255,255,.95);
    background: rgba(0,0,0,.22);
    border: 1px solid rgba(255,255,255,.12);
    transition: transform .18s ease, background .18s ease, box-shadow .18s ease;
  }
  .contactCard:hover{
    transform: translateY(-2px);
    background: rgba(0,0,0,.30);
    box-shadow: 0 0 22px rgba(34,197,94,.18);
  }

  .contactIcon{
    width: 40px; height: 40px;
    display:flex; align-items:center; justify-content:center;
    border-radius: 12px;
    background: rgba(34,197,94,.16);
    border: 1px solid rgba(34,197,94,.22);
    box-shadow: 0 0 18px rgba(34,197,94,.16);
    font-size: 18px;
  }

  .contactLabel{
    font-size: 12px;
    opacity: .85;
  }
  .contactValue{
    font-size: 15px;
    font-weight: 900;
    letter-spacing:.3px;
  }

  .footer__mini{
    margin-top: 10px;
    font-size: 12px;
    opacity: .88;
  }

  .footer__bottom{
    margin-top: 14px;
    padding: 12px 0 14px;
    border-top: 1px dashed rgba(255,255,255,.18);
    position:relative;
  }
  .footer__bottomRow{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap: 10px;
    flex-wrap: wrap;
  }

  .muted{ opacity: .86; }
  .small{ font-size: 13px; }

  /* ===== Back to top ===== */
  .backTop{
    position: fixed;
    right: 18px;
    bottom: 18px;
    width: 46px;
    height: 46px;
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,.16);
    background: rgba(0,0,0,.40);
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    display: none;
    backdrop-filter: blur(12px);
    box-shadow: 0 12px 30px rgba(0,0,0,.35), 0 0 18px rgba(34,197,94,.22);
    transition: transform .18s ease, background .18s ease, opacity .18s ease;
    z-index: 9999;
  }
  .backTop:hover{
    transform: translateY(-2px);
    background: rgba(0,0,0,.55);
  }

  @media (max-width: 820px){
    .footer__grid{ grid-template-columns: 1fr; }
  }
</style>

<script>
  // ===== Footer time + Back to top =====
  (function(){
    const timeEl = document.getElementById('footerTime');
    if(timeEl){
      const now = new Date();
      try{
        timeEl.textContent = now.toLocaleString('th-TH', {
          year:'numeric', month:'long', day:'numeric',
          hour:'2-digit', minute:'2-digit'
        });
      }catch(e){
        timeEl.textContent = now.toLocaleString();
      }
    }

    const btn = document.getElementById('backTop');
    const onScroll = () => {
      if(!btn) return;
      btn.style.display = (window.scrollY > 320) ? 'block' : 'none';
    };
    window.addEventListener('scroll', onScroll, {passive:true});
    onScroll();

    if(btn){
      btn.addEventListener('click', () => {
        window.scrollTo({top:0, behavior:'smooth'});
      });
    }
  })();
</script>

</body>
</html>
