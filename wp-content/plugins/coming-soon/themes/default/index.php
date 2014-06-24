<!DOCTYPE html>
<html class="no-js seed-csp4" lang="en">
	<head>
		<meta charset="utf-8">
		<title>{Title}</title>
		{MetaDescription}
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{Privacy}
		{Favicon}
		{Head}
		{CustomCSS}
	</head>
<body>
<div class="row">
	<div class="col-md-12">
<div id="seed-csp4-content">
	{Logo}
	{Headline}
	hi lol
	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="800px" height="800px" viewBox="0 0 800 800" enable-background="new 0 0 800 800" xml:space="preserve">
<circle fill="#FFFFFF" stroke="#000000" stroke-width="4" stroke-miterlimit="10" cx="115.5" cy="119.5" r="55.5"/>
<ellipse fill="#FFFFFF" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="284" cy="123" rx="69" ry="23"/>
<rect x="403" y="71" fill="#FFFFFF" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="98" height="97"/>
<path fill="#FFFFFF" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M672,158c0,5.523-4.477,10-10,10h-82
    c-5.523,0-10-4.477-10-10V81c0-5.523,4.477-10,10-10h82c5.523,0,10,4.477,10,10V158z"/>
<polyline fill="#FFFFFF" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="66,292 115.5,239 171,321 194,251 
    236,280 268,251 318,291 343,239 368,275 "/>
<path fill="#FFFFFF" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M452,293c0,0,0-61,72-44c0,0-47,117,81,57
    s5-110,10-67s-51,77.979-50,33.989"/>
</svg>

<head>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script><script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js'></script> 
<script language="javascript"> 
function SVG(tag) {
    return document.createElementNS('http://www.w3.org/2000/svg', tag);
}



function replaceRectsWithPaths(parentElement) {


    var rects = $(parentElement).find('rect');

    $.each(rects, function() {

        var rectX = $(this).attr('x');
        var rectY = $(this).attr('y');

        var rectX2 = parseFloat(rectX) + parseFloat($(this).attr('width'));
        var rectY2 = parseFloat(rectY) + parseFloat($(this).attr('height'));

        var convertedPath = 'M' + rectX + ',' + rectY + ' ' + rectX2 + ',' + rectY + ' ' + rectX2 + ',' + rectY2 + ' ' + rectX + ',' + rectY2 + ' ' + rectX + ',' + rectY;


        $(SVG('path'))
        .attr('d', convertedPath)
        .attr('fill', $(this).attr('fill'))
        .attr('stroke', $(this).attr('stroke'))
        .attr('stroke-width', $(this).attr('stroke-width'))
        .insertAfter(this);

    });

    $(rects).remove();
}



function replaceLinesWithPaths(parentElement) {


    var lines = $(parentElement).find('line');

    $.each(lines, function() {

        var lineX1 = $(this).attr('x1');
        var lineY1 = $(this).attr('y1');

        var lineX2 = $(this).attr('x2');
        var lineY2 = $(this).attr('y2');

        var convertedPath = 'M' + lineX1 + ',' + lineY1 + ' ' + lineX2 + ',' + lineY2;


        $(SVG('path'))
        .attr('d', convertedPath)
        .attr('fill', $(this).attr('fill'))
        .attr('stroke', $(this).attr('stroke'))
        .attr('stroke-width', $(this).attr('stroke-width'))
        .insertAfter(this);

    });

    $(lines).remove();
}



function replaceCirclesWithPaths(parentElement) {

    var circles = $(parentElement).find('circle');

    $.each(circles, function() {

        var cX = $(this).attr('cx');
        var cY = $(this).attr('cy');
        var r = $(this).attr('r');
        var r2 = parseFloat(r * 2);

        var convertedPath = 'M' + cX + ', ' + cY + ' m' + (-r) + ', 0 ' + 'a ' + r + ', ' + r + ' 0 1,0 ' + r2 + ',0 ' + 'a ' + r + ', ' + r + ' 0 1,0 ' + (-r2) + ',0 ';

        $(SVG('path'))
        .attr('d', convertedPath)
        .attr('fill', $(this).attr('fill'))
        .attr('stroke', $(this).attr('stroke'))
        .attr('stroke-width', $(this).attr('stroke-width'))
        .insertAfter(this);

    });

    $(circles).remove();
}



function replaceEllipsesWithPaths(parentElement) {


    var ellipses = $(parentElement).find('ellipse');

    $.each(ellipses, function() {

        var cX = $(this).attr('cx');
        var cY = $(this).attr('cy');
        var rX = $(this).attr('rx');
        var rY = $(this).attr('ry');

        var convertedPath = 'M' + cX + ', ' + cY + ' m' + (-rX) + ', 0 ' + 'a ' + rX + ', ' + rY + ' 0 1,0 ' + rX*2 + ',0 ' + 'a ' + rX + ', ' + rY + ' 0 1,0 ' + (-rX*2) + ',0 ';

        $(SVG('path'))
        .attr('d', convertedPath)
        .attr('fill', $(this).attr('fill'))
        .attr('stroke', $(this).attr('stroke'))
        .attr('stroke-width', $(this).attr('stroke-width'))
        .insertAfter(this);

    });

    $(ellipses).remove();
}




function replacePolygonsWithPaths(parentElement) {


    var polygons = $(parentElement).find('polygon');

    $.each(polygons, function() {

        var points = $(this).attr('points');
        var polyPoints = points.split(/[ ,]+/);
        var endPoint = polyPoints[0] + ', ' + polyPoints[1];

        $(SVG('path'))
        .attr('d', 'M' + points + ' ' + endPoint)
        .attr('fill', $(this).attr('fill'))
        .attr('stroke', $(this).attr('stroke'))
        .attr('stroke-width', $(this).attr('stroke-width'))
        .insertAfter(this);

    });

    $(polygons).remove();
}




function replacePolylinesWithPaths(parentElement) {


    var polylines = $(parentElement).find('polyline');

    $.each(polylines, function() {

        var points = $(this).attr('points');

        $(SVG('path'))
        .attr('d', 'M' + points)
        .attr('fill', $(this).attr('fill'))
        .attr('stroke', $(this).attr('stroke'))
        .attr('stroke-width', $(this).attr('stroke-width'))
        .insertAfter(this);

    });

    $(polylines).remove();
}

function hideSVGPaths(parentElement) {

    var paths = $(parentElement).find('path');

    //for each PATH..
    $.each( paths, function() {

        //get the total length
        var totalLength = this.getTotalLength();

        //set PATHs to invisible
        $(this).css({
            'stroke-dashoffset': totalLength,
            'stroke-dasharray': totalLength + ' ' + totalLength
        });
    });
}

function drawSVGPaths(_parentElement, _timeMin, _timeMax, _timeDelay) {


    var paths = $(_parentElement).find('path');

    //for each PATH..
    $.each( paths, function(i) {

        //get the total length
        var totalLength = this.getTotalLength();


        //set PATHs to invisible
        $(this).css({
            'stroke-dashoffset': totalLength,
            'stroke-dasharray': totalLength + ' ' + totalLength
        });

        //animate
        $(this).delay(_timeDelay*i).animate({
            'stroke-dashoffset': 0
        }, {
            duration: Math.floor(Math.random() * _timeMax) + _timeMin
            ,easing: 'easeInOutQuad'
        });
    });
}

function replaceWithPaths(parentElement) {

    replaceRectsWithPaths(parentElement);
    replaceLinesWithPaths(parentElement);
    replaceEllipsesWithPaths(parentElement);
    replaceCirclesWithPaths(parentElement);
    replacePolygonsWithPaths(parentElement);
    replacePolylinesWithPaths(parentElement);    
}

function startSVGAnimation(parentElement) {
    drawSVGPaths(parentElement, 1000, 2000, 50);
}

replaceWithPaths($('svg'));
startSVGAnimation($('svg'));
</script> 
</head> 
	{Description}
</div><!-- / #seed-csp4-content -->
</div></div>
{Credit}

{Footer}
</body>
</html>