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
	    var Checkbox = React.createClass({
	    	getInitialState: function(){
	    		return {checked: false}
	    	},
	    	handleChecked: function(){
	    		this.setState({checked: !this.state.checked})
	    	},
	    	render: function(){
	    		var msg;
	    		if(this.state.checked){
	    			msg = 'Checked';
	    		}else{
	    			msg = 'Unchecked'
	    		}
	    		return (
	    			<div>
	    				<input type="checkbox" onChange={this.handleChecked} defaultChecked={this.state.checked} />
	    				<h3>Checkbox is {msg}</h3>
	    			</div>
	    		);
	    	}
	    });

    	ReactDOM.render(
	        <div className="board">
	        	<Checkbox />
	        </div>
	        ,document.getElementById('root')
		);
    </script>
</body>
</html>