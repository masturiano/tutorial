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
	    	getInitialState: function(){
	    		return {editing: false}
	    	},
	    	edit: function(){
	    		this.setState({editing: true});
	    	},
	    	remove: function(){
	    		console.log('Removing comment');
	    	},
	    	save: function(){
	    		this.setState({editing: false});
	    	},

	    	renderNormal: function(){
	    		return (
	    			<div className="commentContainer">
	    				<div className="commentText">{this.props.children}</div>
	    				<button onClick={this.edit} className="button-primary">Edit</button>
	    				<button onClick={this.remove} className="button-danger">Delete</button>
	    			</div>
	    		);
	    	},

	    	renderForm: function(){
	    		return (
	    			<div className="commentContainer">
	    				<textarea defaultValue={this.props.children}></textarea>
	    				<button onClick={this.save} className="button-success">Save</button>
	    			</div>
	    		);
	    	},
	    	

	    	render: function(){
	    		if(this.state.editing){
	    			return this.renderForm();
	    		}else{
	    			return this.renderNormal();
	    		}
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