async function getdata(url,renderFc){
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data)
}