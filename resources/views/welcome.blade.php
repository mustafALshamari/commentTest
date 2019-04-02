@extends('layouts.app')
@section('content')
<div class="aside">
    @include('include.aside')
</div>   



<section class="posts">
   
    <h2>Language has become a tool  social exclusion <span class="badge badge-secondary">New</span></h2>
<p>
    Within a week of the Salzburg  Seminar’s Statementa Multilingual World launching in February 2018, the document – which calls  policies and practices that support multilingualism – had received 1.5 Million social media impressions.

    The statement opens with some striking facts, including that “all 193 UN member states and most people are multilingual”. It also points out that 7,097 languages are currently spoken across the world but 2,464 of these are endangered. Just 23 languages dominate among these 7,097, and are spoken by over half of the world’s population.
    
    As these statistics show, the soundtrack of our lives and the visual landscapes of our cities are multilingual. Languages, in their plurality, enrich our experience of the world and our creative potential.
</p>

<p>
     
     Multilingualism opens up  of being and of doing, it connects us with others and provides a window into the diversity of our societies. And yet, despite the more positive statistics above, we are currently witnessing a deep divide.
    
   the one hand, multilingualism is associated with mobility, productivity and see,  instance, the EU’s objective  all citizens to speak two languages in addition to their first one).  the other,  (speaking only one language) is still perceived as both the norm and the ideal  an allegedly well-functioning society. Linguistic diversity is seen as both suspicious and costly.
    
    Linguistic penalties
    This is particularly visible in relation to the most vulnerable groups seeking a  refugees and asylum seekers. Newcomers are often required to prove they can read, write and speak the national language/s to be given the right to remain. Fluency, however, goes beyond technical ability in the majority languages. In the 1980s, researchers showed that language is more than just a code by which we communicate, it is related to social and political knowledge, and access to power structures.        
</p>
</section>

<div> <h5 class="card-header">Comments</h5><div><br></div>
  
    <div class="card">
            
            <div class="card-header1">
            <strong></strong>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p></p>
                <footer class="blockquote-footer">Comment at </cite></footer>
              </blockquote>
            </div>
            
          </div><br>
        
</div>    
<div>
  
</div>    
<div>
    @include('include.comment')   
</div>    

<style>
   
.card-header1{
padding: .75rem 1.25rem;
margin-bottom: 0;
background-color: rgba(216, 36, 36, 0.03);
border-bottom: 1px solid rgba(0,0,0,.125);
font-family: cursive;
}
.card-header{
background-color: rgba(216, 12, 12, 0.2);
}

}    

.posts{
width: 70%;
}

.posts img{
width: 0 auto;
height:0 auto;
padding:  15px 0px 15px;

}
.aside{
float: right;
width: 25%;
margin: 10px;
}

@media screen and (max-width: 700px) {
.aside{
    display:none;
   }


</style>  
@endsection