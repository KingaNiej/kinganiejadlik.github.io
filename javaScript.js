function SwapDivsWithClick(div1,div2)
{
   d1 = document.getElementById(div1);
   d2 = document.getElementById(div2);

   if( d2.style.display == "none" )
   {
      d1.style.display = "none";
      d2.style.display = "block";
      d2.style.height = '510px';
   }
   else
   {
      d1.style.display = "block";
      d2.style.display = "none";
      d1.style.height = "50px";
   }
}

