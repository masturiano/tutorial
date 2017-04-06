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
	    var Comment = React.createClass({
	    	edit: function(){
	    		alert('Editing comment');
	    	},
	    	remove: function(){
	    		alert('Removing comment');
	    	},
	    	render: function(){
	    		return (
	    			<div className="commentContainer">
	    				<div className="commentText">{this.props.children}</div>
	    				<button onClick={this.edit} className="button-primary">Edit</button>
	    				<button onClick={this.remove} className="button-danger">Delete</button>
	    			</div>
	    		);
	    	}
	    });

    	ReactDOM.render(
	        <div className="board">
	        	<Comment>Hey now</Comment>
	        	<Comment>Beans</Comment>
	        	<Comment>Tuna</Comment>
	        </div>
	        ,document.getElementById('root')
		);
    </script>
</body>
</html>