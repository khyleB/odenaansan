(()=>{let e=document.querySelector("#the-list"),t=e?.querySelector('[data-slug="carousel-slider"] span.deactivate a'),r=document.querySelector("#carousel-slider-deactivate-feedback-dialog-wrapper"),a=r?.querySelector(".button--skip-feedback"),n=r?.querySelector(".button--submit-feedback"),d=r?.querySelector("form"),i=d.querySelectorAll("input[type=radio]");a.href=t?.getAttribute("href");a.addEventListener("click",(()=>{r.removeAttribute("open")})),n.addEventListener("click",(e=>{e.preventDefault(),n.classList.add("is-loading"),function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;return new Promise((t=>{let r=new XMLHttpRequest;r.open("POST",window.ajaxurl),r.addEventListener("readystatechange",(()=>{r.readyState===XMLHttpRequest.DONE&&200===r.status&&t(!0)})),r.send(e)}))}(new FormData(d)).then((()=>{a.click()})).finally((()=>{n.classList.add("is-loading")}))})),t.addEventListener("click",(e=>{e.preventDefault(),r&&r.setAttribute("open","")})),r.addEventListener("close",(()=>{r.removeAttribute("open")})),i.forEach((e=>{e.addEventListener("change",(e=>{e.target.value&&n.hasAttribute("disabled")&&n.removeAttribute("disabled")}))}))})();