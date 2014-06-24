$(document).ready(function () {
    displayGrid(50);
    $('.spsquare').mouseenter(function () {
        $(this).css("background", "white");
    });
    $('.spclear').click(function () {
        clean();
    });

    $(".spnormal").click(function () {
        setGrid();
        $(".spsquare").unbind();
        $(".spsquare").mouseenter(function () {
            $(this).css("background", "white");
        });
    });

    $(".sprandom").click(function () {
        setGrid();
        $(".spsquare").unbind();
        $(".spsquare").mouseenter(function () {
            $(this).css("background", randomColor());
        });
    });
  
    $(".sptrail").click(function () {
        setGrid();
        $(".spsquare").unbind();
        $(".spsquare").hover(function () {
            $(this).css("opacity", 0);
        }, function () {
            $(this).fadeTo('fast', 1);
        });
    });
});

function setGrid() {
    var col = prompt("Enter # of columns: ");
    displayGrid(col);
    clean();
}

function clean() {
    $(".spsquare").css("background", "#308014").css('opacity', '1');
}

function displayGrid(n) {
    var size = 960;
    var boxSize = (960 - 4 * n) / n;
    var wrap = $(".spwrap").html("");
    for (var j = 0; j < n; j++) {
        for (var i = 0; i < n; i++) {
            wrap.append($("<div></div>").addClass("spsquare").height(boxSize).width(boxSize));
        }
        wrap.append($("<div></div>").css("clear", "both"));
    }
}

function randomColor() {
    var red = Math.floor(Math.random() * 256)
    var blue = Math.floor(Math.random() * 256)
    var green = Math.floor(Math.random() * 256)
    return "#" + red.toHex() + blue.toHex() + green.toHex();
}

Number.prototype.toHex = function () {
    if (this < 16) {
        return '0' + this.toString(16);
    }
    return this.toString(16);
}