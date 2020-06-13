    //Estas variables van a ir aumentando dependiendo de las respuestas
   // var ed = 0;
    var inf = 0;
    var ad = 0;
    var co = 0;
    var sa = 0;
    var construc = 0;
    var ind = 0;
    var el = 0;
    var ps = 0;

function resultados() {
    var p1, p2, p3, p4, p5, p6, resultado;
    //Aqui es donde se van sumando los puntos

    //Esta es de la primera secciòn de preguntas
    if (document.getElementById('p11').checked == true) {//En el caso de que se eligiera educacion se incrementaria la misma en uno
        ed + 1; ad + 0.5; sa + 0.7;
    }
    if (document.getElementById('p12').checked == true) { ps + 1; inf + 1; }
    if (document.getElementById('p13').checked == true) { co + 1; inf + .6; construc + 1; ind + 0.4; el + 1; }
    if (document.getElementById('p14').checked == true) { sa + 1.2; }

    //Esta es de la segunda seccion de preguntas
    if (document.getElementById('p21').checked == true) {//En el caso de que se eligiera educacion se incrementaria la misma en uno
        ed + 1; ad + 0.5; inf - 0.7;
    }
    if (document.getElementById('p22').checked == true) { sa - 0.5; }
    if (document.getElementById('p23').checked == true) { inf - .6; construc - 1; el - 1; }
    if (document.getElementById('p24').checked == true) { inf - 1.2; }

    //Esta es de la tercer seccion de preguntas
    if (document.getElementById('p21').checked == true) {//En el caso de que se eligiera educacion se incrementaria la misma en uno
        ed + 1; ad + 1.5; co + 0.5; ind + 0.2; sa + 0.4;
    }
    if (document.getElementById('p22').checked == true) { ed + 0.8; ad + 1; co + 0.3; ind + 0.1; }
    if (document.getElementById('p23').checked == true) { inf + .6; construc + 0.5; el + 1; }
    if (document.getElementById('p24').checked == true) { ed - 1; ad - 1.5; co - 0.5; ind - 0.2; }

    //Cuando acabe de contrar se manda a la revisiòn y a la pagina correspondiente
    respuesta(ed, inf, ad, co, sa, construc, ind, el, ps);
}

          //window.open('carreras.html', "nuevo"); este se utiliza para paginas en otra pestaña
          function respuesta(industrial,informatica,mantenimiento,salud,social,artes,administracion,educacion,
            construccion,comunicacion,criminologia) {
              if(industrial!=0 || infomratica!=0 ||
              mantenimiento!=0 || salud!=0 || social!=0 ||
              artes!=0 ||administracion !=0 || educacion!=0 ||
              construccion!=0 || comunicacion != 0 || criminologia!=0){
        
                if(industrial>infomratica && industrial>mantenimiento &&
                industrial>=salud && industrial>=social && industrial>=artes &&
                industrial>=administracion && industrial>=educacion &&
                industrial>=construccion && industrial>=comunicacion && industrial>=criminologia){
                  window.open('industrial.html', 'industrial');
                }
        
                if(industrial<infomratica && informatica>mantenimiento &&
                informatica>=salud && informatica>=social && informatica>=artes &&
                informatica>=administracion && informatica>=educacion &&
                informatica>=construccion && informatica>=comunicacion && informatica>=criminologia){
                  window.open('informatica.html', 'informatica');
                }
        
                if(mantenimiento>infomratica && industrial<mantenimiento &&
                mantenimiento>=salud && mantenimiento>=social && mantenimiento>=artes &&
                mantenimiento>=administracion && mantenimiento>=educacion &&
                mantenimiento>=construccion && mantenimiento>=comunicacion && mantenimiento>=criminologia){
                  window.open('mantenimiento.html', 'mantenimiento');
                }
                
                if(salud>=infomratica && salud>=mantenimiento &&
                industrial<=salud && salud>=social && salud>=artes &&
                salud>=administracion && salud>=educacion &&
                salud>=construccion && salud>=comunicacion && salud>=criminologia){
                  window.open('salud.html', 'salud');
                }
        
                if(social>=infomratica && social>=mantenimiento &&
                social>=salud && salud<=social && social>=artes &&
                social>=administracion && social>=educacion &&
                social>=construccion && social>=comunicacion && social>=criminologia){
                  window.open('social.html', 'social');
                }
        
                if(artes>infomratica && artes>mantenimiento &&
                artes>=salud && artes>=social && industrial<=artes &&
                artes>=administracion && artes>=educacion &&
                artes>=construccion && artes>=comunicacion && artes>=criminologia){
                  window.open('artes.html', 'artes');
                }
        
                if(administracion>infomratica && administracion>mantenimiento &&
                administracion>=salud && administracion>=social && administracion>=artes &&
                industrial<=administracion && administracion>=educacion &&
                administracion>=construccion && administracion>=comunicacion && administracion>=criminologia){
                  window.open('administracion.html', 'administracion');
                }
        
                if(educacion>infomratica && educacion>mantenimiento &&
                educacion>=salud && educacion>=social && educacion>=artes &&
                educacion>=administracion && industrial<=educacion &&
                educacion>=construccion && educacion>=comunicacion && educacion>=criminologia){
                  window.open('educacion.html', 'educacion');
                }
        
                if(construccion>infomratica && construccion>mantenimiento &&
                construccion>=salud && construccion>=social && construccion>=artes &&
              construccion>=administracion && construccion>=educacion &&
                industrial<=construccion && construccion>=comunicacion && construccion>=criminologia){
                  window.open('construccion.html', 'construccion');
                }
        
                if(comunicacion>infomratica && comunicacion>mantenimiento &&
                comunicacion>=salud && comunicacion>=social && comunicacion>=artes &&
                comunicacion>=administracion && comunicacion>=educacion &&
                comunicacion>=construccion && industrial<=comunicacion && comunicacion>=criminologia){
                  window.open('comunicacion.html', 'comunicacion');
                }
        
                if(criminologia>infomratica && criminologia>mantenimiento &&
                criminologia>=salud && criminologia>=social && criminologia>=artes &&
                criminologia>=administracion && criminologia>=educacion &&
                criminologia>=construccion && criminologia>=comunicacion && industrial<=criminologia){
                  window.open('criminologia.html', 'criminologia');
                }
        
              }else
              {
                alert('Debes contestar primero el examen')
              }
            }

function sijala(){
    alert('Si esta jalñando el boton');
    resultados();
}