

  function openSideBar()
  {
      document.getElementById('block').style.marginLeft = '220px';
      document.getElementById('banniere').style.marginLeft = '200px';
      document.getElementById('nav').style.width = '200px';
      document.getElementById('block1').style.opacity = '0.6';
      document.getElementById('block2').style.opacity = '0.6';
      document.getElementById('banniere').style.opacity = '0.6';


  }

  function closeSideBar()
  {
      document.getElementById('block').style.marginLeft = '0px';
      document.getElementById('banniere').style.marginLeft = '0px';
      document.getElementById('nav').style.width = '0px';
      document.getElementById('block1').style.opacity = '1';
      document.getElementById('block2').style.opacity = '1';
      document.getElementById('banniere').style.opacity = '1';
  }



  const up = document.getElementById('top');

  window.addEventListener("scroll", goTop);

  function goTop()
  {
    if(window.pageYOffset > 200)
    {
     up.style.display = "block";
    }
    else
    {
     up.style.display = "none";
    }
  }

   up.addEventListener("click", goUp);

  function goUp()
  {
    window.scrollTo(0,0);
  }

  document.getElementById('down').addEventListener("click",goDown);

  function goDown()
  {
    window.scrollTo(0,660);
  }

