
const Header = () => {
     return(
         <>
            <header className={"container-fluid p-3 d-flex justify-content-between align-items-center bg-dark text-light"}>
                <h5>ShopDiv</h5>
                <button className={"btn text-light"}>
                    <i className="fa-solid fa-cart-shopping"></i>
                </button>
            </header>
         </>
     )
}
export default  Header;