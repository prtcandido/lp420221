import {Component} from 'react';

class ConsultaCEP extends Component
{
  state = {logradouro: {}}
  componentDidMount()
  {
 	fetch('https://viacep.com.br/ws/01001000/json/')
 		.then(data => data.json())
 		.then(data => this.setState({logradouro: data}));
  }

  render()
  {
  	return <h1>{this.state.logradouro.logradouro}</h1>
  }

}

export default ConsultaCEP