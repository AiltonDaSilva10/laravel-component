<div class="mb-2 accordion" id="buttons">

    {{-- Botões com as cores principais do bootstrap --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#main-buttons">
                Botões com as cores principais do bootstrap
            </button>
        </h2>
        <div id="main-buttons" class="accordion-collapse collapse" data-bs-parent="#buttons">
            <div class="accordion-body">
                <div class="text-center mb-2">
                    <x-form.button class="btn-secondary" label="secondary" />
                    <x-form.button class="btn-primary" label="primary" />
                    <x-form.button class="btn-warning" label="warning" />
                    <x-form.button class="btn-success" label="success" />
                    <x-form.button class="btn-danger" label="danger" />
                    <x-form.button class="btn-light" label="light" />
                    <x-form.button class="btn-dark" label="dark" />
                    <x-form.button class="btn-info" label="info" />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-secondary" label="secondary" pill />
                    <x-form.button class="btn-primary" label="primary" pill />
                    <x-form.button class="btn-warning" label="warning" pill />
                    <x-form.button class="btn-success" label="success" pill />
                    <x-form.button class="btn-danger" label="danger" pill />
                    <x-form.button class="btn-light" label="light" pill />
                    <x-form.button class="btn-dark" label="dark" pill />
                    <x-form.button class="btn-info" label="info" pill />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-outline-secondary" label="secondary" />
                    <x-form.button class="btn-outline-primary" label="primary" />
                    <x-form.button class="btn-outline-warning" label="warning" />
                    <x-form.button class="btn-outline-success" label="success" />
                    <x-form.button class="btn-outline-danger" label="danger" />
                    <x-form.button class="btn-outline-light" label="light" />
                    <x-form.button class="btn-outline-dark" label="dark" />
                    <x-form.button class="btn-outline-info" label="info" />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-outline-secondary" label="secondary" pill />
                    <x-form.button class="btn-outline-primary" label="primary" pill />
                    <x-form.button class="btn-outline-warning" label="warning" pill />
                    <x-form.button class="btn-outline-success" label="success" pill />
                    <x-form.button class="btn-outline-danger" label="danger" pill />
                    <x-form.button class="btn-outline-light" label="light" pill />
                    <x-form.button class="btn-outline-dark" label="dark" pill />
                    <x-form.button class="btn-outline-info" label="info" pill />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-success" label="success" icon="github" />
                    <x-form.button class="btn-outline-success" label="success" icon="github" pill />
                    <x-form.button class="btn-success" label="success" icon="github" pill />
                    <x-form.button class="btn-outline-success" label="success" icon="github" />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-success" icon="github" />
                    <x-form.button class="btn-outline-success" icon="github" pill />
                    <x-form.button class="btn-success" icon="github" pill />
                    <x-form.button class="btn-outline-success" icon="github" />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-success" icon="github" circle />
                    <x-form.button class="btn-outline-success" icon="github" circle />
                </div>
            </div>
        </div>
    </div>

    {{-- Botões com cores personalizadas --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#custom-buttons">
                Botões com cores personalizadas
            </button>
        </h2>
        <div id="custom-buttons" class="accordion-collapse collapse" data-bs-parent="#buttons">
            <div class="accordion-body">
                <div class="text-center mb-2">
                    <x-form.button class="btn-yellow" label="yellow" />
                    <x-form.button class="btn-indigo" label="indigo" />
                    <x-form.button class="btn-purple" label="purple" />
                    <x-form.button class="btn-orange" label="orange" />
                    <x-form.button class="btn-green" label="green" />
                    <x-form.button class="btn-black" label="black" />
                    <x-form.button class="btn-blue" label="blue" />
                    <x-form.button class="btn-gray" label="gray" />
                    <x-form.button class="btn-teal" label="teal" />
                    <x-form.button class="btn-cyan" label="cyan" />
                    <x-form.button class="btn-pink" label="pink" />
                    <x-form.button class="btn-red" label="red" />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-yellow" label="yellow" pill />
                    <x-form.button class="btn-indigo" label="indigo" pill />
                    <x-form.button class="btn-purple" label="purple" pill />
                    <x-form.button class="btn-orange" label="orange" pill />
                    <x-form.button class="btn-green" label="green" pill />
                    <x-form.button class="btn-black" label="black" pill />
                    <x-form.button class="btn-blue" label="blue" pill />
                    <x-form.button class="btn-gray" label="gray" pill />
                    <x-form.button class="btn-teal" label="teal" pill />
                    <x-form.button class="btn-cyan" label="cyan" pill />
                    <x-form.button class="btn-pink" label="pink" pill />
                    <x-form.button class="btn-red" label="red" pill />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-outline-yellow" label="yellow" />
                    <x-form.button class="btn-outline-indigo" label="indigo" />
                    <x-form.button class="btn-outline-purple" label="purple" />
                    <x-form.button class="btn-outline-orange" label="orange" />
                    <x-form.button class="btn-outline-green" label="green" />
                    <x-form.button class="btn-outline-black" label="black" />
                    <x-form.button class="btn-outline-blue" label="blue" />
                    <x-form.button class="btn-outline-gray" label="gray" />
                    <x-form.button class="btn-outline-teal" label="teal" />
                    <x-form.button class="btn-outline-cyan" label="cyan" />
                    <x-form.button class="btn-outline-pink" label="pink" />
                    <x-form.button class="btn-outline-red" label="red" />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-outline-yellow" label="yellow" pill />
                    <x-form.button class="btn-outline-indigo" label="indigo" pill />
                    <x-form.button class="btn-outline-purple" label="purple" pill />
                    <x-form.button class="btn-outline-orange" label="orange" pill />
                    <x-form.button class="btn-outline-green" label="green" pill />
                    <x-form.button class="btn-outline-black" label="black" pill />
                    <x-form.button class="btn-outline-blue" label="blue" pill />
                    <x-form.button class="btn-outline-gray" label="gray" pill />
                    <x-form.button class="btn-outline-teal" label="teal" pill />
                    <x-form.button class="btn-outline-cyan" label="cyan" pill />
                    <x-form.button class="btn-outline-pink" label="pink" pill />
                    <x-form.button class="btn-outline-red" label="red" pill />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-orange" label="orange" icon="github" />
                    <x-form.button class="btn-outline-orange" label="orange" icon="github" pill />
                    <x-form.button class="btn-orange" label="orange" icon="github" pill />
                    <x-form.button class="btn-outline-orange" label="orange" icon="github" />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-orange" icon="github" />
                    <x-form.button class="btn-outline-orange" icon="github" pill />
                    <x-form.button class="btn-orange" icon="github" pill />
                    <x-form.button class="btn-outline-orange" icon="github" />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-orange" icon="github" circle />
                    <x-form.button class="btn-outline-orange" icon="github" circle />
                </div>
                <div class="text-center mb-2">
                    <x-form.button class="btn-default" label="default" />
                </div>
            </div>
        </div>
    </div>

    {{-- Tamanho dos botões --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#size-buttons">
                Tamanho dos botões
            </button>
        </h2>
        <div id="size-buttons" class="accordion-collapse collapse" data-bs-parent="#buttons">
            <div class="accordion-body">
                <div class="text-center">
                    <x-form.button class="btn-sm btn-default" label="sm" />
                    <x-form.button class="btn-default" label="default" />
                    <x-form.button class="btn-lg btn-default pill-circle" label="lg" />
                </div>
            </div>
        </div>
    </div>

    {{-- Botões em bloco --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#bloc-buttons">
                Botões em bloco
            </button>
        </h2>
        <div id="bloc-buttons" class="accordion-collapse collapse" data-bs-parent="#buttons">
            <div class="accordion-body">
                <div class="d-grid gap-2 mb-2">
                    <x-form.button class="btn-default" label="default" />
                    <x-form.button class="btn-cyan" label="cyan" />
                    <x-form.button class="btn-secondary" label="secondary" />
                </div>
                <div class="d-grid gap-2 d-md-block mb-2">
                    <x-form.button class="btn-default" label="default" />
                    <x-form.button class="btn-cyan" label="cyan" />
                    <x-form.button class="btn-secondary" label="secondary" />
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                    <x-form.button class="btn-default" label="default" />
                    <x-form.button class="btn-cyan" label="cyan" />
                    <x-form.button class="btn-secondary" label="secondary" />
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <x-form.button class="btn-default" label="default" />
                    <x-form.button class="btn-cyan" label="cyan" />
                    <x-form.button class="btn-secondary" label="secondary" />
                </div>
            </div>
        </div>
    </div>

    {{-- Grupo de botões --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#group-buttons">
                Grupo de botões
            </button>
        </h2>
        <div id="group-buttons" class="accordion-collapse collapse" data-bs-parent="#buttons">
            <div class="accordion-body">
                <div class="btn-group mb-2" role="group">
                    <x-form.button class="btn-default" label="default" />
                    <x-form.button class="btn-default" label="default" />
                    <x-form.button class="btn-default" label="default" />
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="btn-group" role="group">
                        <x-form.button class="btn-default" label="default" />
                        <x-form.button class="btn-default" label="default" />
                        <x-form.button class="btn-default" label="default" />
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="btn-group" role="group">
                        <x-form.button class="btn-default" label="default" />
                        <x-form.button class="btn-default" label="default" />
                        <x-form.button class="btn-default" label="default" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
