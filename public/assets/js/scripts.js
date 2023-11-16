'use strict'

//abre menu lateral mobile
function show(element)
{
   const el = document.querySelector(`.${element}`);
   console.log(el)
   el.classList.add('show')
}

//fecha menu lateral mobile
function closeX(element)
{
  const el = document.querySelector(`.${element}`);
   el.classList.remove('show')
   console.log(el)
}