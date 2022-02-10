import axios from 'axios'

export default axios.create({
  baseURL: 'http://localhost:8055/items/',
  headers: {
    'Content-type': 'application/json',
  }
})
