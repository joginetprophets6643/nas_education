import axios from 'axios'

export default axios.create({
  baseURL: 'http://localhost:8055/items/',
  headers: {
    'Content-type': 'application/json',
    "Authorization": "Bearer $2y$10$Y8lv.M9vBmgHTVTTSrNMHeeXHBE/onZ2en1d0.rjlpyLUPglgX4/2"
  }
})
