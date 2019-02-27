<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Page</title>
</head>
<body>

    <div id="app">
        <input type="text" id="input" v-model="message">

        <p>The value of the input is: @{{ message }}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.7/dist/vue.js"></script>
    <script>

        new Vue({
            el: "#app",
            data: {
                message: "Hello World!"
            }
        })
    </script>
</body>
</html>
