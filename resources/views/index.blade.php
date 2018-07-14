@extends('template.main')

@section('conteudo') 
    <div class="container text-center">    
    <h3>Projectos em destaque</h3><br>
    <div class="row well" id="projectos">
        <div class="col-sm-4">
            <div class="card" style="width:400px">
                    <img src="{!! asset('img/Zilani1.jpg') !!}" class="projectos-img">
                    <div class="card-body">
                        <h4 class="card-title">Projecto 1</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="/doacao1" class="btn btn-primary">Fazer doacao</a>
                    </div>
            </div>
        </div>
        <div class="col-sm-4"> 
            <div class="card" style="width:400px">
                    <img src="{!! asset('img/81f8f024b51a4bcab10f7f385b69b292_18.jpg') !!}" class="projectos-img">
                    <div class="card-body">
                    <h4 class="card-title">Projecto 2</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="/doacao2" class="btn btn-primary">Fazer doacao</a>
                </div>
            </div>  
        </div>
        <div class="col-sm-4"> 
            <div class="card" style="width:400px">
                <img src="{!! asset('img/profile-south-africa_0.jpg') !!}" class="projectos-img">
                    <div class="card-body">
                    <h4 class="card-title">Projecto 3</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="/doacao3" class="btn btn-primary">Fazer doacao</a>
                </div>
            </div>  
        </div>
    </div>
    <div class="descricao">
        <h1>Description</h1>

        <p>Granting small loans to help low earners in Africa’s rapidly growing cities build their own homes could help solve a looming housing crisis, 
        experts said on Thursday.</p>
        
        <p><strong>ALSO READ:</strong>The fight for the Big Four Agenda About 40 percent of Africa’s one billion people already live in towns 
        and cities and the World Bank predicts the urban population will double over the next 25 years, putting huge pressure on housing.</p> 

        <p>Most of the new homes being built target the middle and upper classes, and experts say a lack of financing makes it hard for lower earners to 
        buy or build homes - forcing them into illegal slums or other informal housing.</p> 
        
        <p>“It could take up to two generations for people to build their home incrementally if they don’t have financing,” said Sandra Prieto, global director 
            of operations and financial inclusion at home-building charity Habitat for Humanity.</p> 
        
        <p>Small loans with short repayment terms make it possible for people to complete the process more quickly, she told the 
        Thomson Reuters Foundation on the sidelines of a housing conference in the Ugandan capital Kampala this week.</p> 
        
        <p>Text the word 'NEWS' to 22840 The forum brought together housing and microfinance players to discuss how small loans can be used to increase access 
        to affordable housing in sub-Saharan Africa. The Kenya Women Finance Trust (KWFT) is already providing loans of as little as 5,000 Kenyan shillings ($50) 
        to help women who would not otherwise be able to access loans to build homes.</p>
        
        <p>Many commercial lenders are reluctant to provide finance without collateral - which most poorer borrowers cannot 
            provide. Managing Director Mwangi Githaiga said many of its more than 45,000 beneficiaries do not have the titles to the land they are building 
            on, which would traditionally be used as collateral.<strong>ALSO READ:</strong> <em>Big 4, ‘Robin Hood’ tax and all the nice things Instead, recipients of microfinance 
            guarantee each others’</em> loans - any one wanting to borrow money must secure at least three guarantors. </p>
            
        <p>“You need an institution that understands that dynamic and is willing to invest in that kind of 
            situation and look at other ways of creating collateral,” said Githaiga. Six out of 10 urban
            households in Kenya are in slums and the country needs to build 2 million affordable city homes to meet demand, according to the Knight Frank 
            property agency. South Africa’s cities have similar challenges.</p> 
        
        <p>Their expanding slums have increasingly encroached on private land as new people 
        arrive, exacerbating tensions between rich and poor. “Access to financing is important (but) access to land is crucial,” said Kevin 
        Chetty, director market development and housing finance at Habitat for Humanity. “Without land you don’t have a house. This is always a challenge 
        in the urban context.”</p>
        
        </p>Read more at: <a>https://www.standardmedia.co.ke/business/article/2001287897/microfinance-could-help-cities-solve-housing-crisis-experts</a></p>

            <h2>Font :<a>https://www.standardmedia.co.ke/business/article/2001287897/microfinance-could-help-cities-solve-housing-crisis-experts</a></h2>

        </div>
    </div><br>
    <iframe width="800" height="720" src="https://www.youtube.com/embed/NTNQMKB0A3A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    
@endsection

