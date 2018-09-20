// import React from "react";

// export default props => {
//   const position = props.hash.indexOf('id_token')
//   const id_token = props.hash.substr(position + 9, hash.length)

//   fetch('http://localhost:8000/api/private', {
//     method: "GET",
//     headers: {
//       'Accept': 'application/json',
//       'Content-type': 'application/json',
//       'Authorization': 'Bearer ' + id_token,
//     },
//   })
//     .then(res => res.text())
//     .then(console.log)
//   return (
//     <div>
//       {console.log('Props desde Testing', props)}
//     </div>
//   )
// }