import axios from 'axios'

export default axios.create({
  // baseURL: 'http://localhost:8055/items/',
  baseURL: 'https://nas21.inroad.in/apis/items/',
  // baseURL: 'https://nas.gov.in/apisadmin/items/',
  headers: {
    'Content-type': 'application/json',
    "Authorization": "Bearer $2y$10$Y8lv.M9vBmgHTVTTSrNMHeeXHBE/onZ2en1d0.rjlpyLUPglgX4/2"
  }
})


export function scrollToTop(elementName: string) {
  const element = document.getElementById(elementName)
  if (element) {
    element.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
    })
  }
}
