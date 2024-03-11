import axios from "axios";
import './../../style/style.module.css'
import {useEffect, useState} from "react";
const ProductList = () =>{
    const[data,SetData] = useState([]);
    const[Send,SetSent] = useState({});
    // url
    // eslint-disable-next-line no-unused-vars
    const Api_url = 'http://localhost/Server/read.php';

    useEffect(() =>{
        axios.get(Api_url).then(res =>{
          SetData(res.data.data)
        }).catch(error => {
            console.error('Error fetching data:', error);
        });
    },[])
const handleClick = (Product_imae_url,Product_Name,Description,Price) =>{
       const DataToSend = {
           "Product_imae_url": Product_imae_url,
           "Product_Name": Product_Name,
           "Description": Description,
           "Price": Price
       };

    SetSent(DataToSend);

    }
    useEffect(()=>{
        axios.post('http://localhost:63342/crud_php_api_react/crud_php_api_react/Server/Addcart.php', Send)
            .then(response => {
                console.log('Response:', response.data);
                // Handle response if needed
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle errors here
            });
    },[])
    return(
        <>
        <main className={"container-fluid d-flex flex-column justify-content-center align-items-center"}>
            <h1>Menu</h1>
            <div className={"container row gap-2"}>
                {
                  data.map(({Product_imae_url,Product_Name,Description,Price},idx)=>{
                      return(
                          <div key={idx} className="card col-lg-3 p-2 border border-0">
                              <img src={Product_imae_url} alt="image" />
                              <div className="card-body">
                                  <h5 className="card-title">{Product_Name}</h5>
                                  <h5>{Price}</h5>
                                  <p className="card-text">{Description}</p>
                                  <button onClick={() => handleClick(Product_imae_url,Product_Name,Description,Description,Price)} className={"btn btn-outline-warning"}>Buy Now</button>
                              </div>
                          </div>
                      )
                    })

                }
            </div>
        </main>
        </>
    )
}
export default ProductList;