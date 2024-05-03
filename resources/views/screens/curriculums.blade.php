@extends('layout.app')
@section('titre')
    CDEJ - CURRICULUMS
@endsection
@php
    $active = 'curriculum';
@endphp
@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Curriculums</h6>
                <h1 class="mb-5">Nos Domaines de Formation</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/priere.jpeg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Domaine <span class="text-primary"> Spirituel</span></h1>
                    <p class="mb-4">
                        Notre centre embrasse une mission spirituelle, offrant une éducation religieuse basée
                        sur les enseignements bibliques. Nous formons une communauté de foi engagée, encourageant la prière,
                        la méditation, et la connexion spirituelle. Nos activités spirituelles, dirigées par une équipe
                        dévouée, visent à inculquer des valeurs chrétiennes telles que l'amour, la compassion et la
                        bienveillance. Nous croyons en un leadership spirituel qui guide les enfants dans leur croissance
                        spirituelle et les encourage à vivre les principes chrétiens au quotidien.

                    <h6>Activités Spirituelles:</h6>
                    Découvrez des activités spécialement conçues pour nourrir la foi des enfants, y compris des moments
                    de prière, des études bibliques adaptées à leur niveau, et d'autres pratiques spirituelles
                    engageantes.

                    <h6 class="mt-3">Engagement Communautaire:</h6>
                    Nous nous engageons activement dans des activités communautaires basées sur des principes
                    spirituels, encourageant le service et la solidarité. Rejoignez-nous pour partager la foi et
                    construire une communauté basée sur l'amour et la foi chrétienne.

                    <h6 class="mt-3">Valeurs Chrétiennes Fondamentales:</h6>
                    Notre centre incarne des valeurs chrétiennes fondamentales telles que l'amour, la compassion, et la
                    bienveillance. Ces valeurs guident chaque aspect de nos activités quotidiennes, formant ainsi un
                    environnement spirituel enrichissant.
                    </p>
                </div>
            </div>
            <div class="row g-5 my-3">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="mb-4">Domaine <span class="text-primary"> Physique</span></h1>
                    <p class="mb-4">Au sein de notre centre, le développement physique est essentiel pour chaque enfant.
                        Nous nous engageons à favoriser une croissance saine et active à travers des programmes spécialement
                        conçus.

                    <h6 class="mt-3">Promotion de la Santé:</h6>
                    Nous mettons l'accent sur la vitalité et le bien-être en encourageant des habitudes de vie saines.
                    Des activités physiques stimulantes, des conseils nutritionnels adaptés et des moments dédiés à la
                    détente font partie intégrante de notre approche.

                    <h6 class="mt-3">Énergie et Vitalité:</h6>
                    et la vitalité chez les enfants. Des jeux ludiques, des exercices adaptés à leur âge et des
                    activités sportives favorisent le développement physique global.

                    <h6 class="mt-3">Équilibre et Coordination:</h6>
                    Nous croyons en l'importance de l'équilibre et de la coordination physique. Des exercices
                    spécifiques, des jeux interactifs et des activités artistiques sont intégrés pour soutenir le
                    développement moteur de chaque enfant.

                    <h6 class="mt-3">Bien-Être Mental:</h6>
                    Le bien-être physique est indissociable du bien-être mental.
                    Des moments de détente, des exercices de respiration et des activités relaxantes sont inclus
                    pour favoriser l'équilibre entre le corps et l'esprit. Notre engagement envers le
                    développement physique vise à créer un environnement où chaque enfant peut s'épanouir
                    physiquement, embrassant une vie active et équilibrée. </p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/physique.jpeg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="row g-5 my-3">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/cognitif.jpeg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Domaine <span class="text-primary">Cognitif</span></h1>
                    <p class="mb-4">Au cœur de notre centre, nous valorisons le développement cognitif en offrant des
                        programmes éducatifs stimulants. Nous sommes déterminés à cultiver la curiosité intellectuelle et à
                        préparer chaque enfant pour un avenir prometteur.

                    <h6 class="mt-3">Stimulation Cérébrale:</h6>
                    Nos programmes cognitifs sont conçus pour stimuler l'esprit curieux de chaque enfant. Des activités
                    d'apprentissage interactives, des défis intellectuels et des projets créatifs sont intégrés pour
                    favoriser la pensée critique.

                    <h6 class="mt-3">Créativité et Innovation:</h6>
                    Nous encourageons la créativité et l'innovation en offrant des environnements d'apprentissage
                    propices à l'expression artistique, à la résolution de problèmes et à la pensée imaginative. Chaque
                    enfant est encouragé à explorer et à développer ses talents uniques.

                    <h6 class="mt-3">Réussite Académique:</h6>
                    Nous aspirons à l'excellence académique en fournissant des programmes éducatifs de qualité. Des
                    approches pédagogiques adaptées à chaque niveau, des ressources éducatives modernes et un
                    encadrement attentionné favorisent la réussite académique.

                    <h6 class="mt-3">Développement de Compétences:</h6>
                    Au-delà des connaissances académiques, nous mettons l'accent sur le développement de compétences
                    essentielles telles que la communication, la résolution de problèmes et la collaboration, préparant
                    ainsi les enfants pour les défis du monde moderne.

                    Nous sommes convaincus que le développement cognitif est la clé d'une vie enrichissante. À travers
                    nos programmes éducatifs, nous visons à éveiller la curiosité, à favoriser la créativité et à
                    encourager la réussite intellectuelle de chaque enfant.
                    </p>
                </div>
            </div>
            <div class="row g-5 my-3">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="mb-4">Domaine <span class="text-primary">Socio-Emotionnel</span></h1>
                    <p class="mb-4">Au sein de notre centre, nous accordons une attention particulière au développement
                        socio-émotionnel de chaque enfant. Nous créons un environnement chaleureux et sécurisé qui encourage
                        les relations saines et le bien-être émotionnel.

                    <h6 class="mt-3">Cultiver des Relations Saines:</h6>
                    Nous mettons l'accent sur la construction de relations positives entre les enfants, les éducateurs
                    et les pairs. Des activités de groupe, des jeux collaboratifs et des projets communs favorisent
                    l'empathie, la communication et le respect mutuel.

                    <h6 class="mt-3">Développement de l'Empathie:</h6>
                    Nous encourageons le développement de l'empathie en mettant en place des activités qui permettent
                    aux enfants de comprendre et de partager les émotions des autres. La sensibilisation émotionnelle
                    est intégrée dans nos interactions quotidiennes.

                    <h6 class="mt-3">Confiance et Estime de Soi:</h6>
                    Nous croyons en l'importance de construire la confiance en soi et l'estime de soi. Des activités
                    d'expression personnelle, des encouragements positifs et des projets individuels contribuent à
                    renforcer la confiance des enfants en leurs capacités.

                    <h6 class="mt-3">Gestion des Émotions:</h6>
                    Nous enseignons aux enfants des techniques de gestion des émotions pour les aider à comprendre et à
                    exprimer leurs sentiments de manière saine. Les moments de discussion et les activités de groupe
                    créent un espace où les émotions sont accueillies et comprises.

                    Nous sommes déterminés à créer un environnement où chaque enfant peut développer des compétences
                    sociales et émotionnelles essentielles. À travers nos programmes, nous visons à cultiver des
                    relations positives, à renforcer la confiance et à encourager l'épanouissement émotionnel de chaque
                    enfant.
                    </p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/socio.jpeg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Ateliers</h6>
                <h1 class="mb-5">Divers</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 200px;">
                    <div class="card">
                        <img class="img-fluid " src="{{ asset('img/info.jpeg') }}" alt=""
                            style="object-fit: cover; height: 500px">
                        <div class="card-body mb-4 px-5">
                            <h1 class="mb-4">Atelier D'<span class="text-primary">Informatique</span></h1>
                            Explorez le monde numérique dans notre atelier d'informatique, un espace vibrant où les enfants
                            découvrent les bases de la technologie de manière ludique. De la découverte des ordinateurs à la
                            création de projets interactifs, chaque séance stimule la curiosité et développe des compétences
                            informatiques essentielles. Encadrés par des éducateurs passionnés, les enfants explorent la
                            créativité numérique tout en renforçant leur compréhension du monde technologique qui les
                            entoure.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 200px;">
                    <div class="card">
                        <img class="img-fluid " src="{{ asset('img/musique.jpeg') }}" alt=""
                            style="object-fit: cover; height: 500px">
                        <div class="card-body mb-4 px-5">
                            <h1 class="mb-4">Atelier de <span class="text-primary"> Musique</span></h1>
                            Plongez dans l'univers enchanteur de notre atelier de musique, où les enfants découvrent le
                            plaisir de créer des mélodies. Guidés par des professionnels passionnés, ils explorent divers
                            instruments, apprennent les bases du rythme et de la mélodie, et participent à des activités
                            stimulantes favorisant l'expression musicale. Cet atelier offre un espace dynamique où la
                            créativité s'épanouit et où chaque note contribue à l'éveil artistique des enfants.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 200px;">
                    <div class="card">
                        <img class="img-fluid " src="{{ asset('img/cuisine.jpeg') }}" alt=""
                            style="object-fit: cover; height: 500px">
                        <div class="card-body mb-4 px-5">
                            <h1 class="mb-4">Atelier de <span class="text-primary"> Cuisine</span></h1>
                            Laissez les papilles s'éveiller dans notre atelier de cuisine, où les enfants explorent le monde
                            délicieux de la gastronomie. Sous la guidance de chefs passionnés, ils découvrent les
                            ingrédients, apprennent des techniques culinaires et créent des chefs-d'œuvre gustatifs. Cet
                            atelier offre une expérience sensorielle où la créativité culinaire s'épanouit, éveillant la
                            passion pour la préparation des aliments et le plaisir de partager des saveurs uniques.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 200px;">
                    <div class="card">
                        <img class="img-fluid " src="{{ asset('img/deco.jpeg') }}" alt=""
                            style="object-fit: cover; height: 500px">
                        <div class="card-body mb-4 px-5">
                            <h1 class="mb-4">Atelier de <span class="text-primary"> Décoration</span></h1>
                            Plongez dans l'art de l'expression visuelle avec notre atelier de décoration. Sous la guidance
                            de créateurs talentueux, les enfants explorent l'univers des couleurs, des textures et des
                            formes pour créer des œuvres uniques. Des projets artistiques captivants stimulent la
                            créativité, encourageant l'exploration artistique et la fierté dans la réalisation de créations
                            décoratives. Cet atelier offre un espace où l'imagination prend vie, chaque enfant devenant
                            l'architecte de son propre monde visuel.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End --
@endsection
