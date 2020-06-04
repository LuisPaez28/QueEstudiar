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

function respuesta(ed, inf, ad, co, sa, construc, ind, el, ps) {
    if (ed != 0 || inf != 0 || ad != 0 || co != 0 || sa != 0 || construc != 0 || ind != 0 || el != 0 || ps != 0) {
        if (ed >= inf && ed >= ad && ed >= co && ed >= sa && ed >= construc && ed >= ind && ed >= el && ed >= ps) {
            //Abrir la pagina donde tienes las carreras de parral orientadas a la educaciòn
            alert('Educación');
            location.href = 'educacion.html';
        }
        if (inf >= ed && inf >= ad && inf >= co && inf >= sa && inf >= construc && inf >= ind && inf >= el && inf >= ps) {
            //Abrir la pagina donde tienes las carreras de parral orientadas a la educaciòn
            alert('Informatica');
            location.href = 'informatica.html';
        }
        if (ad >= inf && ad >= ed && ad >= co && ad >= sa && ad >= construc && ad >= ind && ad >= el && ad >= ps) {
            //Abrir la pagina donde tienes las carreras de parral orientadas a la educaciòn
            alert('Administración');
            location.href = 'administracion.html';
        }
        if (sa >= inf && sa >= ad && sa >= co && sa >= ed && sa >= construc && sa >= ind && sa >= el && sa >= ps) {
            //Abrir la pagina donde tienes las carreras de parral orientadas a la educaciòn
            alert('Salúd');
            location.href = 'salud.html';
        }
        if (construc >= inf && construc >= ad && construc >= co && construc >= sa && construc >= ed && construc >= ind && construc >= el && construc >= ps) {
            //Abrir la pagina donde tienes las carreras de parral orientadas a la educaciòn
            alert('Construcción');
            location.href = 'Construccion.html';
        }
        if (ind >= inf && ind >= ad && ind >= co && ind >= sa && ind >= construc && ind >= ed && ind >= el && ind >= ps) {
            //Abrir la pagina donde tienes las carreras de parral orientadas a la educaciòn
            alert('Industrial');
            location.href = 'industrial.html';
        }
        if (el >= inf && el >= ad && el >= co && el >= sa && el >= construc && el >= ind && el >= ed && el >= ps) {
            //Abrir la pagina donde tienes las carreras de parral orientadas a la educaciòn
            alert('Electricidad');
            location.href = 'electricidad.html';
        }
        if (ps >= inf && ps >= ad && ps >= co && ps >= sa && ps >= construc && ps >= ind && ps >= el && ps >= ed) {
            //Abrir la pagina donde tienes las carreras de parral orientadas a la educaciòn
            alert('Psicología');
            location.href = 'psicologia.html';
        }
    } else {
        alert('Por favor contesta el test primero');
    }
}

function sijala(){
    alert('Si esta jalñando el boton');
    resultados();
}