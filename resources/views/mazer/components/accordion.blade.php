<x-app-layout>
    <x-slot:title>
        Accordion
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Accordion</h3>
                    <p class="text-subtitle text-muted">A pretty helpful component to show organized information to the
                        user.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Accordion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Default</h4>
                        </div>
                        <div class="card-body">
                            <p>Click the accordions below to expand/collapse the accordion content.</p>
                            <x-accordion id="accordionExample">
                                <x-accordion.item id="collapseOne" parent="#accordionExample">
                                    <x-slot:header>
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </x-slot:header>

                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </x-accordion.item>
                            </x-accordion>

                            <x-accordion id="accordionExample">
                                <x-accordion.item id="collapseTwo" parent="#accordionExample">
                                    <x-slot:header>
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </x-slot:header>

                                    <strong>This is the second item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </x-accordion.item>
                            </x-accordion>

                            <x-accordion id="accordionExample">
                                <x-accordion.item id="collapseThree" parent="#accordionExample" :show="true">
                                    <x-slot:header>
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </x-slot:header>

                                    <strong>This is the third item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </x-accordion.item>
                            </x-accordion>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Flush</h4>
                        </div>
                        <div class="card-body">
                            <p>Add <code>.accordion-flush</code> to remove the default background-color, some borders,
                                and
                                some rounded corners to render accordions edge-to-edge with their parent container.</p>

                            <x-accordion id="accordionFlushExample" :flush="true">
                                <x-accordion.item id="flush-collapseOne" parent="#accordionFlushExample">
                                    <x-slot:header>
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </x-slot:header>

                                    Placeholder content for this accordion, which is
                                    intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                    first item's accordion body.
                                </x-accordion.item>

                                <x-accordion.item id="flush-collapseTwo" parent="#accordionFlushExample">
                                    <x-slot:header>
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </x-slot:header>

                                    Placeholder content for this accordion, which is
                                    intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                    second item's accordion body. Let's imagine this being filled with some
                                    actual
                                    content.
                                </x-accordion.item>

                                <x-accordion.item id="flush-collapseThree" parent="#accordionFlushExample">
                                    <x-slot:header>
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </x-slot:header>

                                    Placeholder content for this accordion, which is
                                    intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                    third item's accordion body. Nothing more exciting happening here in terms
                                    of
                                    content, but just filling up the space to make it look, at least at first
                                    glance, a bit more representative of how this would look in a real-world
                                    application.
                                </x-accordion.item>
                            </x-accordion>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</x-app-layout>
