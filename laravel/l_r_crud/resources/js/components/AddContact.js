import React from 'react';
import axios from 'axios';

class AddContact extends React.Component{
	state = {
		fullname: '',
		email: '',
		mobile: ''
	}
	handleInput = (e) => {
		this.setState({[e.target.name]:e.target.value});
	}
	saveContact = async (e) => {
		e.preventDefault();
		const res = await axios.post("/contact", this.state);
		this.setState({fullname:'', email:'', mobile:''});
		if(res.data.status === 200){
			this.props.history.push("/");
		}
		//console.log(res);
	}
	render(){
		return(
			<div>
				<h1>Add Contacts</h1>
				<form onSubmit={this.saveContact}>
					<div className="form-group">
						<input type="text" name="fullname" className="form-control" value={this.state.fullname} onChange={this.handleInput} placeholder="Enter Full Name" required/>
					</div>
					<div className="form-group">
						<input type="email" name="email" className="form-control" value={this.state.email} onChange={this.handleInput} placeholder="Enter Email" required/>
					</div>
					<div className="form-group">
						<input type="text" name="mobile" className="form-control" value={this.state.mobile} onChange={this.handleInput} placeholder="Enter Mobile Number" required/>
					</div>
					<div className="form-group">
						<input type="submit" className="btn btn-primary" value="Add Contact" />
					</div>
				</form>
			</div>
		)
	}
}

export default AddContact;