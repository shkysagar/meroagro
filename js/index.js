var TiltAnimation = function () {

    var
        hero,
        mouseX,
        mouseY,
        textX,
        textY;

    var _init = function () {
        mouseX = 0;
        mouseY = 0;
        slider = document.getElementById('hero');
        textX = document.getElementsByClassName('slider__itemX')[0];
        textY = document.getElementsByClassName('slider__itemY')[0];

        _addEventHandlers();
    }

    var _addEventHandlers = function () {
        document.getElementById('hero').addEventListener('mousemove', _getMousePos, false);
    }

    var _getMousePos = function (e) {
        e = e || window.event;

        mouseX = e.pageX;
        mouseY = e.pageY;

        var xPos = (mouseX / window.innerWidth) - 0.5
        var yPos = (mouseY / window.innerHeight) - 0.5


        $("#hero").mouseleave(function(){
            TweenLite.to(slider, 0.6, {
                rotationY: 5 * 0,
                rotationX: 5 * 0,
                ease: Power1.easeOut,
                transformPerspective: 500,
                transformOrigin: "center"
            });
        });


        TweenLite.to(slider, 0.6, {
            rotationY: 5 * xPos,
            rotationX: 5 * yPos,
            ease: Power1.easeOut,
            transformPerspective: 900,
            transformOrigin: "center"
        });
        textX.innerHTML = mouseX;
        textY.innerHTML = mouseY;
    }

    return {
        init: _init
    }
}();

TiltAnimation.init();
