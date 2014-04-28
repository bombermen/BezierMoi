<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="canvas.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </head>
    <body>
        <div id ="main_page" class="box_shadow">
            <h1>Bezier Curve</h1>
            <p>Click on the canvas to add some points to the curve. You can drag and drop existing points using their handles.</p>
            <canvas id="myCanvas" class="box_shadow" width="820px" height="300px"></canvas>   

            <div id="options" class="box_shadow" >
                <h2>Options</h2>


                <div id="left_column">
                    <div class="item">
                        <label for="drawConstruction">Draw Construction</label>
                        <input id="drawConstruction" type="checkbox" checked />
                    </div>

                    <div class="item">
                        <label for="drawCurve">Draw Curve</label>
                        <input id="drawCurve" type="checkbox" checked />
                    </div>

                    <div class="item">
                        <label for="drawPolygon">Draw Polygon</label>
                        <input id="drawPolygon" type="checkbox"checked />
                    </div>
                </div>

                <script src="canvas.js"></script>

                <div id="right_column">
                    <div class="item">
                        <label for="tSlider">t</label>
                        <input id="tSlider" type="range" min="0" max="1" value="0" step=".01" oninput="updateConstructionT(this.value)" />
                    </div>

                    <div class="item">
                        <label for="resolution">Resolution</label>
                        <input id="resolution" type="range" min="1" max="10" value="0" step="1" value="5" oninput="updateResolution(this.value)" />
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
