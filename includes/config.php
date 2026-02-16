</main>

<footer class="footer footer--clean">
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
        <div>
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
      <div class="small muted">
        Made with ❤ for “4สหายขายปุ๋ย”
      </div>
      <div class="small muted" id="footerTime"></div>
    </div>
  </div>
</footer>

<button class="backTop" id="backTop">↑</button>

<style>
/* =========================
   CLEAN GREEN FOOTER
========================= */

.footer--clean{
  margin-top:50px;
  padding:30px 0 0;
  color:rgba(255,255,255,.92);
  background:
    linear-gradient(135deg,#03110C,#062E1C 60%,#0B3D25);
  border-top:1px solid rgba(255,255,255,.1);
}

.footer__grid{
  display:grid;
  grid-template-columns:1.2fr .8fr;
  gap:20px;
  padding:20px 0;
}

.footer__brand,
.footer__contact{
  background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.1);
  border-radius:18px;
  padding:18px;
  backdrop-filter:blur(10px);
  box-shadow:0 15px 40px rgba(0,0,0,.35);
}

.footer__title{
  display:flex;
  align-items:center;
  gap:10px;
  font-weight:800;
  font-size:16px;
}

.footer__badge{
  background:rgba(0,0,0,.3);
  padding:5px 12px;
  border-radius:999px;
  font-size:12px;
  border:1px solid rgba(255,255,255,.15);
}

.footer__meta{
  margin-top:12px;
  display:flex;
  gap:10px;
  flex-wrap:wrap;
}

.chip{
  background:rgba(255,255,255,.08);
  padding:8px 14px;
  border-radius:999px;
  border:1px solid rgba(255,255,255,.12);
  font-size:13px;
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
  margin-top:12px;
  font-size:13px;
  opacity:.85;
}

.footer__contactTitle{
  font-weight:900;
  margin-bottom:12px;
}

.contactCard{
  display:flex;
  align-items:center;
  gap:12px;
  padding:14px;
  border-radius:14px;
  background:rgba(0,0,0,.3);
  border:1px solid rgba(255,255,255,.1);
  text-decoration:none;
  color:white;
  transition:.2s;
}
.contactCard:hover{
  transform:translateY(-3px);
  box-shadow:0 0 20px rgba(34,197,94,.3);
}

.contactIcon{
  width:42px;
  height:42px;
  border-radius:12px;
  display:flex;
  align-items:center;
  justify-content:center;
  background:rgba(34,197,94,.2);
  font-size:18px;
}

.contactLabel{
  font-size:12px;
  opacity:.8;
}

.contactValue{
  font-weight:900;
  font-size:16px;
}

.footer__mini{
  margin-top:12px;
  font-size:12px;
  opacity:.8;
}

.footer__bottom{
  border-top:1px solid rgba(255,255,255,.1);
  padding:15px 0;
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
  right:20px;
  bottom:20px;
  width:48px;
  height:48px;
  border-radius:12px;
  background:rgba(0,0,0,.5);
  border:1px solid rgba(255,255,255,.2);
  color:white;
  font-size:18px;
  display:none;
  cursor:pointer;
  transition:.2s;
}
.backTop:hover{
  background:rgba(0,0,0,.8);
}
@media(max-width:800px){
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
    btn.style.display=window.scrollY>300?'block':'none';
  });
  btn.addEventListener('click',()=>{
    window.scrollTo({top:0,behavior:'smooth'});
  });
})();
</script>

</body>
</html>
