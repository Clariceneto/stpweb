<!-- loader-image-border.html -->
<div id="custom-loader">
  <div class="loader">
    <div class="loader-border">
      <img src="loading.jpeg" alt="Logo" class="loader-img">
    </div>
    
  </div>
</div>

<style>
#custom-loader {
  position: fixed; top:0; left:0; width:100vw; height:100vh;
  background: rgba(0,0,0,0.5); /* transparente para manter o fundo */
  display:flex; justify-content:center; align-items:center; flex-direction:column;
  z-index:9999; transition: opacity 0.5s ease;
}

.loader {
  text-align:center; 
  font-family:'Segoe UI', sans-serif; 
  position: relative;
}

.loader-border {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  padding: 10px; /* espaço para a borda */
  display: flex;
  justify-content: center;
  align-items: center;
  background: conic-gradient(
    from 0deg,
    #f5d5a0,
    #f5d5a0 25%,
    #d5f5a0 50%,
    #a0f5d5 75%,
    #f5d5a0
  );
  animation: rotateBorder 3s linear infinite;
}

.loader-img {
  width: 80px; 
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  animation: pulseImg 1.5s infinite cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes pulseImg {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.15); opacity: 0.85; }
}

@keyframes rotateBorder {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.loader p {
  margin-top:10px; 
  font-size:1rem; 
  color:#f5f5dc;
}

#custom-loader.hide { 
  opacity:0; 
  pointer-events:none; 
  transition: opacity 0.5s ease;
}
</style>

<script>
(function(){
  const loader = document.getElementById('custom-loader');

  // Esconde loader após 4s
  setTimeout(()=>loader.classList.add('hide'), 4000);

  // Mostrar loader ao clicar em links
  document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function(e){
      const href = this.getAttribute('href');
      if(!href || href.startsWith('#') || href.startsWith('javascript:')) return;
      loader.classList.remove('hide');
    });
  });
})();
</script>