function DetectTelefoon()
    {
       var uagent = navigator.userAgent.toLowerCase();
       if (uagent.search("android") > -1)
          document.getElementById('downloadapp');
       else
          document.getElementById('downloadapp').style.display = "";
    }