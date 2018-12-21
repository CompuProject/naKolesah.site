<div class="online-selection">
	<div class="wrapper">
		<div class="container text-center">
		<h2 class="text-center2" id="addresses"><span>Онлайн-сервис</span> подбора моделей дисков</h2>
			<p class="online-selection__subtitle">По заданным параметрам подберем для вас перечень оптимальных
				вариантов, в желаемой для вас ценовой
				категории:</p>
			<form class="online-selection__form modalWindow" name="online-selection" comment="Подобрать диски" modalName="pick_up_car_drives">
				<div class="step" id="step1">
					<p class="online-selection__form-step">
						<span>Шаг 1</span>/4
					</p>
					<p>Выберите марку Вашего авто:</p>
					<label>
						Марка авто
						<select name="brand">
							<option value="ВАЗ">LADA (ВАЗ)</option>
							<option value="Audi">Audi</option>
							<option value="BMW" selected>BMW</option>
							<option value="Chery">Chery</option>
							<option value="Chevrolet">Chevrolet</option>
							<option value="Citroen">Citroen</option>
							<option value="Daewoo">Daewoo</option>
							<option value="Ford">Ford</option>
							<option value="Great Wall">Great Wall</option>
							<option value="Honda">Honda</option>
							<option value="Infiniti">Infiniti</option>
							<option value="Jeep">Jeep</option>
							<option value="Kia">Kia</option>
							<option value="Land Rover">Land Rover</option>
							<option value="Lexus">Lexus</option>
							<option value="Lifan">Lifan</option>
							<option value="Mazda">Mazda</option>
							<option value="Mercedes-Benz">Mercedes-Benz</option>
							<option value="Mitsubishi">Mitsubishi</option>
							<option value="Nissan">Nissan</option>
							<option value="Opel">Opel</option>
							<option value="Peugeot">Peugeot</option>
							<option value="Porsche">Porsche</option>
							<option value="Renault">Renault</option>
							<option value="Skoda">Skoda</option>
							<option value="Ssang Yong">Ssang Yong</option>
							<option value="Subaru">Subaru</option>
							<option value="Suzuki">Suzuki</option>
							<option value="Toyota">Toyota</option>
							<option value="Volkswagen">Volkswagen</option>
							<option value="Volvo">Volvo</option>
							<option value="ГАЗ">ГАЗ</option>
							<option value="УАЗ">УАЗ</option>
							<option value="Другая">Другая</option>
						</select>
					</label>
					<button class="big-yellow-button js-next-step" type="button" onclick="yaCounter51352711.reachGoal('DALEE_1'); return true;">
                        <span class="text">
                            Далее
                            <span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span>
                        </span>
                    </button>
				</div>

				<div class="step" id="step2" style="display: none;">
					<p class="online-selection__form-step">
						Шаг <span>2</span>/4
					</p>
					<p>Выберите желаемый диаметр дисков:</p>
					<select name="diameter">
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
					</select>
					<div class="form-buttons">
						<button class="big-yellow-button back-button js-prev-step" type="button">Назад</button>
						<button class="big-yellow-button js-next-step" type="button" onclick="yaCounter51352711.reachGoal('DALEE_2'); return true;">
                        <span class="text">
                            Далее
                            <span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span>
                        </span>
                        </button>
					</div>
				</div>

				<div class="step" id="step3" style="display: none;">
					<p class="online-selection__form-step">
						Шаг <span>3</span>/4
					</p>
					<p>
						Выберите приемлимую для вас стоимость дисков:
					</p>
					<div class="online-selection__form-price">
						<span class="range-border">1 000</span>
						<input type="text" name="price" class="range-example-start" min="1000" max="80000" step="1000">
						<span class="range-border">80 000</span>
					</div>
					<div class="form-buttons">
						<button class="big-yellow-button back-button js-prev-step" type="button">Назад</button>
						<button class="big-yellow-button js-next-step" type="button" onclick="yaCounter51352711.reachGoal('DALEE_3'); return true;">
                        <span class="text">
                            Далее
                            <span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span>
                        </span>
                        </button>
					</div>
				</div>

				<div class="step" id="step4" style="display: none;">
					<p class="online-selection__form-step">
						Шаг <span>4/4</span>
					</p>
					<p class="online-selection__form-info">
						Оставьте свой телефон и <span>в течение 10 минут</span> с вами свяжется наш менеджер и
						продемонстрирует самые оптимальные варианты, <span>которые мы для вас подобрали</span>:
					</p>

					<label>Номер телефона *<input type="tel" required></label>
					<button class="big-yellow-button" id="modal6" onclick="yaCounter51352711.reachGoal('QVIZ_Z'); return true;">
                        <span class="text">
                            Посмотреть лучшие диски для моего авто
                            <span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span>
                        </span>
                    </button>
					<p class="online-selection__form-free">
						Это бесплатно и ни к чему вас не обязывает*
					</p>
				</div>
			</form>
		</div>
	</div>
</div>