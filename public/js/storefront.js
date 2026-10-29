
(function(){
 const products=window.ECOM_PRODUCTS||[];
 const KEY='ecom-demo-wishlist-v1';
 const getIds=()=>{try{return JSON.parse(localStorage.getItem(KEY)||'[]')}catch(e){return []}};
 const setIds=ids=>{localStorage.setItem(KEY,JSON.stringify([...new Set(ids)]));updateBadge()};
 const byId=id=>products.find(p=>p.id===id);
 const escapeHtml=s=>String(s||'').replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
 const asset=name=>'/assets/'+String(name||'').replace(/^.*\//,'');
 function toast(message){let old=document.querySelector('.ecom-toast');if(old)old.remove();let el=document.createElement('div');el.className='ecom-toast';el.textContent=message;document.body.appendChild(el);setTimeout(()=>el.remove(),2600)}
 function updateBadge(){let count=getIds().length;document.querySelectorAll('[data-ecom-wishlist-count]').forEach(el=>el.textContent=count)}
 window.addEventListener('storage', updateBadge);
 function productUrl(p){return '/product?id='+encodeURIComponent(p.id)}
 function decorateCards(){
   document.querySelectorAll('article.best-product-card, article[data-name]').forEach(card=>{
     let raw=card.getAttribute('data-name')||'';
     let p=products.find(x=>x.name.toLowerCase()===raw.toLowerCase());
     if(!p){let text=card.innerText.toLowerCase();p=products.find(x=>text.includes(x.name.toLowerCase()))}
     if(!p)return;
     card.dataset.ecomProductId=p.id;
     if(!card.querySelector('.ecom-heart-btn')){
       let b=document.createElement('button');b.type='button';b.className='ecom-heart-btn';b.setAttribute('aria-label','Add to wishlist');b.innerHTML='♡';
       b.addEventListener('click',e=>{e.preventDefault();e.stopPropagation();toggle(p.id)});card.appendChild(b);
     }
     card.style.cursor='pointer';
     card.addEventListener('click',e=>{if(e.target.closest('button,a,input,label'))return;location.href=productUrl(p)});
   });
   refreshHearts();
 }
 function refreshHearts(){let ids=getIds();document.querySelectorAll('.ecom-heart-btn').forEach(b=>{let id=b.closest('[data-ecom-product-id]')?.dataset.ecomProductId;b.classList.toggle('is-saved',ids.includes(id));b.innerHTML=ids.includes(id)?'♥':'♡';b.setAttribute('aria-label',ids.includes(id)?'Remove from wishlist':'Add to wishlist')})}
 function toggle(id){let ids=getIds();if(ids.includes(id)){setIds(ids.filter(x=>x!==id));toast('Removed from wishlist')}else{setIds([...ids,id]);toast('Added to wishlist')}refreshHearts();renderWishlist()}
 function detailPage(){
   if(!document.querySelector('.single-product-page'))return;
   const id=new URLSearchParams(location.search).get('id');const p=byId(id)||products[0];if(!p)return;
   const title=document.querySelector('.single-product-page h1');
   if(title)title.textContent=p.title;
   const img=document.querySelector('.sp-main-image img');if(img){img.src=asset(p.image);img.alt=p.title}
   const price=document.querySelector('.sp-price-line strong');if(price)price.textContent=p.price;
   const old=document.querySelector('.sp-price-line del');if(old)old.textContent=p.oldPrice||'';
   const desc=document.querySelector('.single-product-page p');if(desc&&p.description)desc.textContent=p.description;
   let btn=document.querySelector('[data-ecom-detail-wishlist]');
   if(!btn){btn=document.createElement('button');btn.type='button';btn.className='ecom-wishlist-action';btn.dataset.ecomDetailWishlist='';btn.style.margin='0 0 16px';const controls=document.querySelector('.sp-purchase-controls')||document.querySelector('.sp-price-line');if(controls)controls.parentNode.insertBefore(btn,controls)}
   function update(){let saved=getIds().includes(p.id);btn.textContent=saved?'♥ Added to Wishlist':'♡ Add to Wishlist';btn.classList.toggle('is-saved',saved)}
   btn.onclick=()=>{toggle(p.id);update()};update();
   let crumb=document.querySelector('.sp-continue');if(crumb)crumb.href='/shop-grid';
   document.title=p.title+' | Ecom Demo';
 }
 function renderWishlist(){
   const grid=document.getElementById('ecom-wishlist-grid');if(!grid)return;
   const ids=getIds();const selected=new Set([...document.querySelectorAll('.ecom-wish-select:checked')].map(x=>x.value));
   const selectRow=document.getElementById('ecom-select-all-row');if(selectRow)selectRow.style.display=ids.length?'flex':'none';
   const remove=document.getElementById('ecom-remove-selected');if(remove)remove.disabled=selected.size===0;
   const all=document.getElementById('ecom-select-all');if(all){all.checked=ids.length>0&&ids.every(id=>selected.has(id));all.indeterminate=selected.size>0&&!all.checked}
   if(!ids.length){grid.innerHTML='<div class="ecom-wishlist-empty"><h2>Your wishlist is empty</h2><p>Save products you love and find them here anytime.</p><a class="ecom-wishlist-action" href="/shop-grid" style="display:inline-block;text-decoration:none">Explore products</a></div>';return}
   grid.innerHTML=ids.map(id=>byId(id)).filter(Boolean).map(p=>`<article class="ecom-wishlist-card"><input class="ecom-wish-select" type="checkbox" value="${escapeHtml(p.id)}" aria-label="Select ${escapeHtml(p.name)}" ${selected.has(p.id)?'checked':''}><a class="ecom-wish-link" href="${productUrl(p)}"><img src="${asset(p.image)}" alt="${escapeHtml(p.title)}"><h3>${escapeHtml(p.title)}</h3></a><p class="ecom-wish-price">${escapeHtml(p.price)}</p><button class="ecom-wish-remove" data-remove-id="${escapeHtml(p.id)}">Remove from Wishlist</button></article>`).join('');
   grid.querySelectorAll('.ecom-wish-select').forEach(cb=>cb.addEventListener('change',renderWishlist));
   grid.querySelectorAll('[data-remove-id]').forEach(btn=>btn.addEventListener('click',()=>{setIds(getIds().filter(id=>id!==btn.dataset.removeId));toast('Successfully removed from wishlist');renderWishlist()}));
 }
 document.addEventListener('DOMContentLoaded',()=>{
   const link=document.createElement('link');link.rel='stylesheet';link.href='/css/storefront.css';document.head.appendChild(link);
   updateBadge();decorateCards();detailPage();renderWishlist();
   const all=document.getElementById('ecom-select-all');if(all)all.addEventListener('change',()=>{document.querySelectorAll('.ecom-wish-select').forEach(cb=>cb.checked=all.checked);renderWishlist()});
   const remove=document.getElementById('ecom-remove-selected');if(remove)remove.addEventListener('click',()=>{const selected=[...document.querySelectorAll('.ecom-wish-select:checked')].map(cb=>cb.value);if(!selected.length)return;setIds(getIds().filter(id=>!selected.includes(id)));renderWishlist();toast('Successfully removed from wishlist')});
 });
})();
