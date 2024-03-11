import './../../style/style.module.css'
const HeroSection = () =>{
    return (
        <>
            <section className={"container-fluid p-3 d-flex flex-column justify-content-center bg-dark"}>
                <div className={"col-lg-4"}>
                    <h4>Explore Boundless Shopping Adventures with Our E-commerce ShopDiv</h4>
                    <p>
                        In the bustling world of online retail, embark on an exhilarating
                        journey through our E-commerce Wonderland. Welcome to a realm where
                        shopping knows no bounds and convenience reigns supreme.
                    </p>
                    <button className={"btn btn-outline-dark"}>Learn More</button>
                </div>
            </section>
        </>
    )
}
export default HeroSection;