<!DOCTYPE html>
<html>
<head>
    <title>Point Forecast API</title>
</head>
<body>
    <form method="POST" action="/point-forecast">
        @csrf
        <div>
            <label for="lat">Latitude:</label>
            <input type="text" name="lat" id="lat">
        </div>
        <div>
            <label for="lon">Longitude:</label>
            <input type="text" name="lon" id="lon">
        </div>
        <div>
            <label for="model">Model:</label>
            <input type="text" name="model" id="model" value="gfs" readonly>
        </div>
        <div>
            <label for="parameters">Parameters:</label>
            {{-- <input type="text" name="parameters[]" id="parameters" multiple> --}}
            <input type="checkbox" id="parameters1" name="parameters[]" value="wind">
            <label for="parameters1">Wind</label>

            <input type="checkbox" id="parameters2" name="parameters[]" value="dewpoint">
            <label for="parameters2">Dewpoint</label>

            <input type="checkbox" id="parameters3" name="parameters[]" value="rh">
            <label for="parameters3">Rh</label>

            <input type="checkbox" id="parameters4" name="parameters[]" value="pressure">
            <label for="parameters4">Pressure</label>

            <input type="checkbox" id="parameters5" name="parameters[]" value="ptype">
            <label for="parameters5">Ptype</label>

            <input type="checkbox" id="parameters6" name="parameters[]" value="convPrecip">
            <label for="parameters6">ConvPrecip</label>

            <input type="checkbox" id="parameters6" name="parameters[]" value="temp">
            <label for="parameters6">Temp</label>


        </div>
        <div>
            <label for="levels">Levels:</label>
            {{-- <input type="text" name="levels[]" id="levels" multiple> --}}
            <input type="checkbox" id="levels1" name="levels[]" value="surface">
            <label for="levels1">surface</label>

            <input type="checkbox" id="levels2" name="levels[]" value="800h">
            <label for="levels2">800h</label>

            <input type="checkbox" id="levels3" name="levels[]" value="300h">
            <label for="levels3">300h</label>
        </div>
        <br>
        <div>
            {{-- <label for="key">API Key:</label> --}}
            <input type="hidden" name="key" id="key" value="vTDBD8ZOCdnJZ8cikarfReoZwmYOefhw">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    
</body>
</html>