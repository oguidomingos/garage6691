<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garage_novo
 */

get_header();
?>



<div class="w-12/12 mx-auto">
	<section class="bg-top bg-no-repeat bg-gray-700 bg-blend-multiply h-screen"
		style="background-image: url('<?php echo get_template_directory_uri(); ?>/imgs/hero_capa.png');">
		<div class="px-4 mx-auto max-w-screen-xl text-center mt-12 py-24 lg:py-80">
			<h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
				Transformando a Manutenção Automotiva</h1>
			<p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Nossa equipe especializada em
				veículos alemães combina expertise técnica e tecnologia de ponta para oferecer soluções rápidas,
				precisas e confiáveis.</p>
			<div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
				<a href="#"
					class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
					Agende seu Carro
					<svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 14 10">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5h12m0 0L9 1m4 4L9 9" />
					</svg>
				</a>
				<a href="#"
					class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
					Converse Conosco
				</a>
			</div>
		</div>
	</section>
</div>

<div class="md:w-10/12 mx-auto py-20">


	<section class="bg-white dark:bg-gray-900">
		<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
			<div class="flex flex-col justify-center">
				<h1
					class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
					Compromisso com a Excelência</h1>
				<p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Na Garage6691, a
					excelência não é apenas uma promessa, é a base de tudo que fazemos. Focamos no que realmente
					importa: entregar serviços de alta qualidade que atendem às necessidades específicas de cada
					veículo. Seja para uma manutenção rotineira ou reparos complexos, nossa equipe altamente qualificada
					está pronta para superar suas expectativas.</p>
				<div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
					<a href="#"
						class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
						Agende seu Carro
						<svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
							xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M1 5h12m0 0L9 1m4 4L9 9" />
						</svg>
					</a>
					<a href="#"
						class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
						Converse Conosco
					</a>
				</div>
			</div>
			<div>
				<iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl"
					src="https://www.youtube.com/embed/KaLxCiilHns" title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
			</div>
		</div>
	</section>
</div>


<div class="md:w-10/12 mx-auto py-20">


	<section class="bg-white dark:bg-gray-900">
		<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
			<div
				class="card1-bg bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
				<a href="#"
					class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
					<svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="currentColor" viewBox="0 0 20 14">
						<path
							d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
					</svg>
					Diagnóstico Avançado Técnico
				</a>
				<h1 class="text-white text-3xl md:text-5xl font-extrabold mb-2">Precisão Técnica para Seu Veículo</h1>
				<p class="text-lg font-normal text-gray-300 dark:text-gray-400 mb-6">Na Garage6691, elevamos a análise
					técnica a um novo patamar com nosso Diagnóstico Avançado. Utilizando equipamentos de ponta e
					expertise técnica, identificamos com precisão as necessidades do seu veículo. Nosso diagnóstico
					minucioso detecta desde pequenas inconsistências até problemas complexos, garantindo uma solução
					eficaz e prevenindo futuras complicações. Confie na Garage6691 para um diagnóstico que mantém seu
					carro em condição impecável.</p>
				<a href="#"
					class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
					Fale Conosco
					<svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 14 10">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5h12m0 0L9 1m4 4L9 9" />
					</svg>
				</a>
			</div>
			<div class="grid md:grid-cols-2 gap-8">
				<div
					class="card2-bg bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
					<a href="#"
						class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
						<svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
							fill="currentColor" viewBox="0 0 18 18">
							<path
								d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
						</svg>
						Transmissão DSG
					</a>
					<h2 class="text-white dark:text-white text-3xl font-extrabold mb-2">Reparo Especializado em DSG:
						Expertise e Qualidade</h2>
					<p class="text-lg font-normal text-gray-300 dark:text-gray-400 mb-4">O sistema de transmissão DSG
						exige um cuidado especializado, e a Garage6691 está pronta para atender a essa necessidade. Com
						técnicos altamente qualificados, oferecemos serviços de reparo em DSG que restauram a eficiência
						e a performance do seu veículo. Seja para ajustes finos ou reparos completos, nossa equipe
						garante um serviço de alta qualidade que prolonga a vida útil e melhora o desempenho do seu
						sistema de transmissão DSG.</p>
					<a href="#"
						class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Fale
						Conosco
						<svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
							xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M1 5h12m0 0L9 1m4 4L9 9" />
						</svg>
					</a>
				</div>
				<div
					class="card3-bg bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
					<a href="#"
						class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
						<svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
							fill="none" viewBox="0 0 20 16">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
						</svg>
						Revisão Preventiva
					</a>
					<h2 class="text-white dark:text-white text-3xl font-extrabold mb-2">Revisão Preventiva: Cuidado
						Integral para Seu Veículo</h2>
					<p class="text-lg font-normal text-gray-300 dark:text-gray-400 mb-4">Prevenir é melhor que remediar,
						especialmente quando se trata do seu carro. Na Garage6691, nossa Revisão Preventiva abrange uma
						série de verificações e manutenções essenciais para garantir que seu veículo opere sempre nas
						melhores condições. Desde a inspeção de sistemas vitais até ajustes e trocas necessárias,
						cuidamos do seu carro com atenção aos detalhes, assegurando seu desempenho e segurança em todas
						as viagens.</p>
					<a href="#"
						class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Fale
						Conosco
						<svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
							xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M1 5h12m0 0L9 1m4 4L9 9" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="w-8/12 mx-auto py-56">
	<h3 class="mx-auto text-center text-2xl font-bold tracki sm:text-3xl dark:text-gray-50 md:py-10 sm:py-6">
		Seu Carro em Boas Mãos: Nosso Processo
	</h3>
	<div class="py-20">
		<ol class="flex items-top">
			<li class="relative w-full mb-6">
				<div class="flex items-center justify-end">
					<div
						class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
						<span class="flex w-3 h-3 bg-blue-600 rounded-full"></span>
					</div>
					<div class="flex w-1/2 bg-gray-200 h-0.5 dark:bg-gray-700"></div>
				</div>

				<div class="mt-3 ">
					<h3
						class="text-start sm:text-center text-xs sm:text-base font-medium text-gray-900 dark:text-white px-2">
						Checkin <br class="block sm:hidden">do Carro</h3>
				</div>
			</li>
			<li class="relative w-full mb-6">
				<div class="flex items-center">
					<div class="flex w-1/2 bg-gray-200 h-0.5 dark:bg-gray-700"></div>
					<div
						class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
						<span class="flex w-3 h-3 bg-blue-600 rounded-full"></span>
					</div>
					<div class="flex w-1/2 bg-gray-200 h-0.5 dark:bg-gray-700"></div>
				</div>
				<div class="mt-3">
					<h3 class="text-center text-xs sm:text-base font-medium text-gray-900 dark:text-white px-2">
						Checklist e Diagnóstico</h3>
				</div>
			</li>
			<li class="relative w-full mb-6 mx-auto">
				<div class="flex items-center">
					<div class="flex w-1/2 bg-gray-200 h-0.5 dark:bg-gray-700"></div>
					<div
						class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
						<span class="flex w-3 h-3 bg-blue-600 rounded-full"></span>
					</div>
				</div>
				<div class="mt-3 w-full">
					<h3
						class="text-end sm:text-center  text-xs sm:text-base font-medium text-gray-900 dark:text-white px-2">
						Orçamento e execução</h3>
				</div>
			</li>
		</ol>
	</div>

	<p class="mb-3 text-gray-500 dark:text-gray-400">Na Garage6691, simplificamos o cuidado automotivo. Começamos com um
		check-in detalhado do seu carro, seguido por um diagnóstico abrangente para identificar qualquer questão.
		Apresentamos um orçamento claro e executamos os serviços necessários com eficiência e precisão. Com a
		Garage6691, cada passo é transparente e focado na sua total satisfação. </p>
	<div class="grid grid-cols-1 md:gap-6 md:grid-cols-2">
		<p class="mb-3 text-gray-500 dark:text-gray-400">Nossa equipe utiliza tecnologia avançada para diagnosticar
			rapidamente qualquer problema. Seja um simples ajuste ou reparos mais complexos, temos a habilidade e os
			recursos para restaurar a condição ideal do seu veículo. Escolha a Garage6691 para soluções eficazes e
			duradouras, mantendo seu carro sempre na melhor forma.</p>
		<blockquote class="mb-3">
			<p class="text-xl italic font-semibold text-gray-900 dark:text-white">Nossa equipe especializada em veículos
				alemães combina expertise técnica e tecnologia de ponta para oferecer soluções rápidas, precisas e
				confiáveis.</p>
		</blockquote>
	</div>
	<p class="mb-3 text-gray-500 dark:text-gray-400">Com nossa assistência especializada, seu veículo alemão mantém sua
		performance e segurança inalteradas, evitando surpresas indesejadas na estrada..</p>

</div>


<div class="md:w-8/12 mx-auto">
	<section class="dark:bg-gray-800 dark:text-gray-100">
		<div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
			<div>
				<h2 class="text-3xl font-bold tracki text-center sm:text-5xl dark:text-gray-50">Inovação e Conhecimento
					Técnico</h2>
				<p class="max-w-3xl mx-auto mt-4 text-xl text-center dark:text-gray-400">Mesclamos técnicas tradicionais
					com inovações de ponta. Essa abordagem nos posiciona como pioneiros, combinando confiabilidade e
					avanço tecnológico.</p>
			</div>
			<div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
				<div>
					<h3 class="text-2xl font-bold tracki sm:text-3xl dark:text-gray-50">Excelência e Conhecimento
						Avançado</h3>
					<p class="mt-3 text-lg dark:text-gray-400">Nossos especialistas aplicam conhecimentos avançados para
						fornecer soluções personalizadas, elevando o desempenho e a inovação em cada serviço.</p>
					<div class="mt-12 space-y-12">
						<div class="flex">
							<div class="flex-shrink-0">
								<div
									class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-gray-900">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
										stroke="currentColor" class="w-7 h-7">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M5 13l4 4L19 7"></path>
									</svg>
								</div>
							</div>
							<div class="ml-4">
								<h4 class="text-lg font-medium leadi dark:text-gray-50">Sintonia Fina em Cada Detalhe
								</h4>
								<p class="mt-2 dark:text-gray-400">Tratamos cada veículo com sensibilidade e precisão,
									proporcionando uma experiência de condução aprimorada onde desempenho encontra
									conforto.</p>
							</div>
						</div>
						<div class="flex">
							<div class="flex-shrink-0">
								<div
									class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-gray-900">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
										stroke="currentColor" class="w-7 h-7">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M5 13l4 4L19 7"></path>
									</svg>
								</div>
							</div>
							<div class="ml-4">
								<h4 class="text-lg font-medium leadi dark:text-gray-50">Excedendo Expectativas em Cada
									Reparo</h4>
								<p class="mt-2 dark:text-gray-400">Focamos nos detalhes para exceder expectativas. Cada
									componente é cuidadosamente examinado, assegurando um desempenho superior.</p>
							</div>
						</div>
						<div class="flex">
							<div class="flex-shrink-0">
								<div
									class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-gray-900">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
										stroke="currentColor" class="w-7 h-7">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M5 13l4 4L19 7"></path>
									</svg>
								</div>
							</div>
							<div class="ml-4">
								<h4 class="text-lg font-medium leadi dark:text-gray-50">Inovação e Integridade para o
									Futuro Automotivo</h4>
								<p class="mt-2 dark:text-gray-400">Combinamos integridade e inovação para preparar seu
									veículo para o futuro, garantindo desempenho e confiabilidade excepcionais.</p>
							</div>
						</div>
					</div>
				</div>
				<div aria-hidden="true" class="mt-10 lg:mt-0">
					<img src="https://source.unsplash.com/random/360x480" alt=""
						class="mx-auto rounded-lg shadow-lg dark:bg-gray-500">
				</div>
			</div>
			<div>
				<div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
					<div class="lg:col-start-2">
						<h3 class="text-2xl font-bold tracki sm:text-3xl dark:text-gray-50">Padrões Elevados de Serviço
						</h3>
						<p class="mt-3 text-lg dark:text-gray-400">Na Garage6691, cada serviço é uma oportunidade para
							superar expectativas, oferecendo soluções que melhoram o desempenho a longo prazo.</p>
						<div class="mt-12 space-y-12">
							<div class="flex">
								<div class="flex-shrink-0">
									<div
										class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-gray-900">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
											stroke="currentColor" class="w-7 h-7">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M5 13l4 4L19 7"></path>
										</svg>
									</div>
								</div>
								<div class="ml-4">
									<h4 class="text-lg font-medium leadi dark:text-gray-50">Conforto e Comodidade no
										Serviço de Busca e Devolução</h4>
									<p class="mt-2 dark:text-gray-400">Priorizamos sua conveniência. Oferecemos um
										serviço de busca e devolução de veículos, garantindo que seu dia-a-dia não seja
										interrompido enquanto cuidamos do seu carro</p>
								</div>
							</div>
							<div class="flex">
								<div class="flex-shrink-0">
									<div
										class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-gray-900">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
											stroke="currentColor" class="w-7 h-7">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M5 13l4 4L19 7"></path>
										</svg>
									</div>
								</div>
								<div class="ml-4">
									<h4 class="text-lg font-medium leadi dark:text-gray-50">Entrega com o Padrão Premium
										de Limpeza</h4>
									<p class="mt-2 dark:text-gray-400">Cada veículo atendido é devolvido em estado
										impecável. Nossa equipe assegura que seu carro esteja não apenas reparado, mas
										também limpo e aspirado, refletindo nosso compromisso com a excelência em todos
										os aspectos.</p>
								</div>
							</div>
							<div class="flex">
								<div class="flex-shrink-0">
									<div
										class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 dark:text-gray-900">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
											stroke="currentColor" class="w-7 h-7">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M5 13l4 4L19 7"></path>
										</svg>
									</div>
								</div>
								<div class="ml-4">
									<h4 class="text-lg font-medium leadi dark:text-gray-50">Inspeção Abrangente para
										Garantia de Qualidade</h4>
									<p class="mt-2 dark:text-gray-400">Nossa abordagem metódica inclui um checklist
										detalhado de todos os componentes do veículo. Este processo garante que cada
										aspecto do seu carro seja avaliado e atendido com a mais alta precisão e
										cuidado.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-10 lg:mt-0 lg:col-start-1 lg:row-start-1">
						<img src="https://source.unsplash.com/random/361x481" alt=""
							class="mx-auto rounded-lg shadow-lg dark:bg-gray-500">
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="w-12/12 mx-auto py-56">
	<section class="dark:bg-gray-800 dark:text-gray-100">
		<div class="container px-6 py-12 mx-auto">
			<div class="grid items-center gap-4 xl:grid-cols-5">
				<div class="max-w-2xl mx-auto my-8 space-y-4 text-center xl:col-span-2 xl:text-left">
					<h2 class="text-4xl font-bold">Vozes da Confiança: Experiências Reais de Clientes Satisfeitos</h2>
					<p class="dark:text-gray-400">Descubra como a Garage6691 transformou a experiência automotiva de
						nossos clientes. Leia relatos autênticos que refletem nossa dedicação à excelência, inovação e
						atenção meticulosa a cada detalhe.</p>
				</div>
				<div class="p-6 xl:col-span-3">
					<div class="grid gap-4 md:grid-cols-2">
						<div class="grid content-center gap-4">
							<div class="p-6 rounded shadow-md dark:bg-gray-900">
								<p>Como gerente de projetos, preciso de eficiência e confiabilidade. A Garage6691
									superou minhas expectativas com sua agilidade e precisão. O serviço de busca e
									devolução do meu carro foi um diferencial que economizou meu tempo valioso.</p>
								<div class="flex items-center mt-4 space-x-4">
									<img src="https://source.unsplash.com/50x50/?portrait?1" alt=""
										class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-gray-500">
									<div>
										<p class="text-lg font-semibold">Ana Silva</p>
										<p class="text-sm dark:text-gray-400">Gerente de Projetos</p>
									</div>
								</div>
							</div>
							<div class="p-6 rounded shadow-md dark:bg-gray-900">
								<p>Sou advogado e tempo é essencial para mim. A Garage6691 me impressionou com sua
									eficiência e atenção aos detalhes. O serviço de busca e entrega foi muito útil, e
									meu carro estava impecável. Confio e recomendo a Garage6691 pelo excelente trabalho
									e cuidado.</p>
								<div class="flex items-center mt-4 space-x-4">
									<img src="https://source.unsplash.com/50x50/?portrait?2" alt=""
										class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-gray-500">
									<div>
										<p class="text-lg font-semibold">Carlos Rocha</p>
										<p class="text-sm dark:text-gray-400"> Advogado</p>
									</div>
								</div>
							</div>
						</div>
						<div class="grid content-center gap-4">
							<div class="p-6 rounded shadow-md dark:bg-gray-900">
								<p>Meu tempo é precioso, e a Garage6691 entende isso perfeitamente. Os serviços de busca
									e devolução do carro me economizam um tempo valioso. Além disso, a atenção aos
									detalhes na manutenção do meu carro é impressionante, um serviço realmente muito
									bom. Conveniência e a confiabilidade.</p>
								<div class="flex items-center mt-4 space-x-4">
									<img src="https://source.unsplash.com/50x50/?portrait?3" alt=""
										class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-gray-500">
									<div>
										<p class="text-lg font-semibold">Pedro Andrade</p>
										<p class="text-sm dark:text-gray-400">Executivo de Instituição Federal</p>
									</div>
								</div>
							</div>
							<div class="p-6 rounded shadow-md dark:bg-gray-900">
								<p>Sou apaixonado por carros e bem criterioso com os serviços. A Garage6691 me
									surpreendeu positivamente com o reparo especializado em DSG. O desempenho do meu
									carro melhorou notavelmente, e a transparência no processo ganhou minha total
									confiança.</p>
								<div class="flex items-center mt-4 space-x-4">
									<img src="https://source.unsplash.com/50x50/?portrait?4" alt=""
										class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-gray-500">
									<div>
										<p class="text-lg font-semibold">Rafael Torres</p>
										<p class="text-sm dark:text-gray-400">Engenheiro e Entusiasta de Carros</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<section class="relative py-10 overflow-hidden bg-black sm:py-16 lg:py-24 xl:py-32">
	<div class="absolute inset-0">
		<img class="object-cover w-full h-full md:object-left md:scale-150 md:origin-top-left"
			src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/5/girl-working-on-laptop.jpg" alt="" />
	</div>

	<div class="absolute inset-0 hidden bg-gradient-to-r md:block from-black to-transparent"></div>

	<div class="absolute inset-0 block bg-black/60 md:hidden"></div>

	<div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
		<div class="text-center md:w-2/3 lg:w-1/2 xl:w-1/3 md:text-left">
			<h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">Solicite um Checklist
				Gratuito do seu Carro</h2>
			<p class="mt-4 text-base text-gray-200">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
				sint. Velit officia consequat duis enim velit mollit. Exercitation veniam.</p>

			<form action="#" method="POST" class="mt-8 lg:mt-12">
				<div class="flex flex-col items-center sm:flex-row sm:justify-center">
					<div class="flex-1 w-full min-w-0 px-4 sm:px-0">
						<div class="relative text-gray-400 focus-within:text-gray-600">
							<label for="email" class="sr-only"></label>
							<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
								<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
									viewBox="0 0 48 48">
									<path
										d="M 24 3.9980469 C 12.972292 3.9980469 4 12.970339 4 23.998047 C 4 27.273363 4.8627078 30.334853 6.2617188 33.064453 L 4.09375 40.826172 C 3.5887973 42.629575 5.3719261 44.41261 7.1757812 43.908203 L 14.943359 41.740234 C 17.670736 43.136312 20.727751 43.998047 24 43.998047 C 35.027708 43.998047 44 35.025755 44 23.998047 C 44 12.970339 35.027708 3.9980469 24 3.9980469 z M 24 6.9980469 C 33.406292 6.9980469 41 14.591755 41 23.998047 C 41 33.404339 33.406292 40.998047 24 40.998047 C 20.998416 40.998047 18.190601 40.217527 15.742188 38.853516 A 1.50015 1.50015 0 0 0 14.609375 38.71875 L 7.2226562 40.779297 L 9.2851562 33.396484 A 1.50015 1.50015 0 0 0 9.1503906 32.261719 C 7.7836522 29.811523 7 27.002565 7 23.998047 C 7 14.591755 14.593708 6.9980469 24 6.9980469 z M 17.240234 15 C 16.921234 15 16.405797 15.119656 15.966797 15.597656 C 15.528797 16.073656 14.294922 17.228125 14.294922 19.578125 C 14.294922 21.928125 16.005141 24.197578 16.244141 24.517578 C 16.482141 24.834578 19.547344 29.812562 24.402344 31.726562 C 28.436344 33.316563 29.256812 32.999922 30.132812 32.919922 C 31.008813 32.841922 32.959422 31.766391 33.357422 30.650391 C 33.755422 29.534391 33.755672 28.579813 33.638672 28.382812 C 33.519672 28.183812 33.200656 28.063219 32.722656 27.824219 C 32.245656 27.585219 29.898937 26.430484 29.460938 26.271484 C 29.022938 26.112484 28.702766 26.031766 28.384766 26.509766 C 28.066766 26.987766 27.152047 28.062859 26.873047 28.380859 C 26.594047 28.700859 26.315891 28.740953 25.837891 28.501953 C 25.358891 28.260953 23.822094 27.757859 21.996094 26.130859 C 20.576094 24.865859 19.620797 23.302219 19.341797 22.824219 C 19.063797 22.348219 19.311781 22.086609 19.550781 21.849609 C 19.765781 21.635609 20.028578 21.292672 20.267578 21.013672 C 20.504578 20.734672 20.583188 20.53675 20.742188 20.21875 C 20.901188 19.90175 20.822125 19.621813 20.703125 19.382812 C 20.584125 19.143813 19.655469 16.780938 19.230469 15.835938 C 18.873469 15.041938 18.49725 15.024719 18.15625 15.011719 C 17.87825 15.000719 17.558234 15 17.240234 15 z">
									</path>
								</svg>

							</div>
							<input type="tel" name="cellphone" id="cellphone"
								placeholder="Digite o seu número de Whatsapp"
								class="block w-full py-4 pl-10 pr-4 text-base text-black placeholder-gray-500 transition-all duration-200 border-gray-200 rounded-md sm:rounded-r-none caret-blue-600 focus:border-blue-600 focus:ring-1 focus:ring-blue-600"
								required />
						</div>
					</div>

					<button type="submit"
						class="inline-flex items-center justify-center flex-shrink-0 w-auto px-4 py-4 mt-4 font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md sm:mt-0 sm:rounded-l-none sm:w-auto hover:bg-blue-700 focus:bg-blue-700">
						Solicite agora
					</button>
				</div>
			</form>
		</div>
	</div>
</section>


</div>
<?php
get_footer();
