<html>
<head>
    <meta charset="UTF-8">
    <title>Oddle</title>
    <script src="https://unpkg.com/react@latest/dist/react.js"></script>
    <script src="https://unpkg.com/react-dom@latest/dist/react-dom.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
</head>
<body>
    <div id="root"></div>
    <script type="text/babel">

	    var Bacon = React.createClass({
	    	render: function(){
	    		return (
	    			<div>
		    			<h3>This is a simple component</h3>
		    			<p>I am sample text</p>
		    		</div>
	    		);
	    	}
	    });

    	ReactDOM.render(
	        <div>
	        	<Bacon />
	        	<Bacon />
	        	<Bacon />
	        </div>,
	        document.getElementById('root')
		);
    </script>
</body>
</html>