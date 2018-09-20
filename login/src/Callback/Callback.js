import React, { Component } from 'react';
import loading from './loading.svg';
// import Testing from '../Testing';

class Callback extends Component {
  

  render() {
    console.log('Calback', this.props)
    const { hash } = this.props.location
    const position = hash.indexOf('id_token');
    const id_token = hash.substr(position + 9, hash.length);

    fetch('http://localhost:3010/api/private', {
      method: "GET",
      headers: {
        'Accept': 'application/json',
        'Content-type': 'application/json',
        'Authorization': 'Bearer ' + id_token,
      },
      body: JSON.stringify(),
    })
      .then(res => res.text())
      .then(console.log)

    const style = {
      position: 'absolute',
      display: 'flex',
      justifyContent: 'center',
      height: '100vh',
      width: '100vw',
      top: 0,
      bottom: 0,
      left: 0,
      right: 0,
      backgroundColor: 'white',
    }

    return (
      <div style={style}>
        <img src={loading} alt="loading" />
        {/* <Testing hash={this.props.location.hash} /> */}
      </div>
    );
  }
}

export default Callback;
