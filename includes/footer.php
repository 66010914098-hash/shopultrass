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
        <a class="chip chip--link" href="mailto:friend4@gmail.com">
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
        <div class="contactIcon">☎</div>
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

<button class="backTop" id="backTop">↑</button>

<style>
/* ===== CLEAN GREEN FOOTER (NO DOTS) ===== */
.footer--ultra{
  position: relative;
  margin-top: 48px;
  padding: 26px 0 0;
  color: rgba(255,255,255,.92);
  background: linear-gradient(135deg,#03110C,#062E1C 60%,#0B3D25);
  border-top: 1px solid rgba(255,255,255,.14);
}

.footer__grid{
  display:grid;
  grid-template-columns: 1.2fr .8fr;
  gap: 18px;
  padding: 18px 12px;
}

.footer__brand,
.footer__contact{
  background: rgba(255,255,255,.05);
  border: 1px solid rgba(255,255,255,.10);
  border-radius: 18px;
  padding: 16px;
  box-shadow: 0 14px 34px rgba(0,0,0,.28);
}

.footer__title{
  display:flex;
  align-items:center;
  gap:10px;
  font-weight:800;
  font-size:16px;
}

.footer__badge{
  padding:4px 10px;
  border-radius:999px;
  font-size:12px;
  background:rgba(0,0,0,.3);
  border:1px solid rgba(255,255,255,.15);
}

.footer__meta{
  margin-top:10px;
  display:flex;
  gap:8px;
  flex-wrap:wrap;
}

.chip{
  padding:8px 14px;
  border-radius:999px;
  font-size:13px;
  background:rgba(255,255,255,.08);
  border:1px solid rgba(255,255,255,.12);
}

.chip--link{
  text-decoration:none;
  color:white;
  transition:.2s;
}
.chip--link:hover{
  background:rgba(34,197,94,.2);
}

.footer__hint{
  margin-top:10px;
  font-size:13px;
  opacity:.85;
}

.footer__contactTitle{
  font-weight:900;
  margin-bottom:10px;
}

.contactCard{
  display:flex;
  gap:12px;
  align-items:center;
  padding:12px;
  border-radius:14px;
  text-decoration:none;
  color:white;
  background:rgba(0,0,0,.3);
  border:1px solid rgba(255,255,255,.12);
  transition:.2s;
}
.contactCard:hover{
  transform:translateY(-2px);
  box-shadow:0 0 20px rgba(34,197,94,.3);
}

.contactIcon{
  width:40px;
  height:40px;
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius:12px;
  background:rgba(34,197,94,.2);
  font-size:18px;
}

.contactLabel{
  font-size:12px;
  opacity:.8;
}

.contactValue{
  font-size:15px;
  font-weight:900;
}

.footer__mini{
  margin-top:10px;
  font-size:12px;
  opacity:.85;
}

.footer__bottom{
  border-top:1px solid rgba(255,255,255,.1);
  padding:12px 0;
}

.footer__bottomRow{
  display:flex;
  justify-content:space-between;
  flex-wrap:wrap;
  gap:10px;
}

.small{font-size:13px;}
.muted{opacity:.7;}

/* Back to top */
.backTop{
  position:fixed;
  right:18px;
  bottom:18px;
  width:46px;
  height:46px;
  border-radius:14px;
  border:1px solid rgba(255,255,255,.16);
  background:rgba(0,0,0,.5);
  color:white;
  font-size:18px;
  display:none;
  cursor:pointer;
  transition:.2s;
}
.backTop:hover{
  background:rgba(0,0,0,.8);
}

@media (max-width:820px){
  .footer__grid{
    grid-template-columns:1fr;
  }
}
</style>

<script>
(function(){
  const timeEl=document.getElementById('footerTime');
  if(timeEl){
    const now=new Date();
    timeEl.textContent=now.toLocaleString('th-TH',{
      year:'numeric',
      month:'long',
      day:'numeric',
      hour:'2-digit',
      minute:'2-digit'
    });
  }
  const btn=document.getElementById('backTop');
  window.addEventListener('scroll',()=>{
    btn.style.display=window.scrollY>320?'block':'none';
  });
  btn.addEventListener('click',()=>{
    window.scrollTo({top:0,behavior:'smooth'});
  });
})();
</script>

</body>
</html>
