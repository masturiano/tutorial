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
	    var Movie = React.createClass({
	    	render: function(){
	    		return (
	    			<div>
	    				<h1>{this.props.title}</h1>
	    				<h2>{this.props.genre}</h2>
	    			</div>
	    		);
	    	}
	    });

    	ReactDOM.render(
	        <div>
	        	<Movie title="Avatar" genre="action"/>
	        	<Movie title="The Notebook" genre="romance"/>
	        	<Movie title="Captain America" genre="action"/>
	        </div>,
	        document.getElementById('root')
		);
    </script>
</body>
</html>