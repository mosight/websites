<!DOCTYPE html>
<html>
	<?php include_once "header.php";?>
	
	  	<div id="content">
	  		<div id="accordion">
			    <h2>Design of a 2.5Gbps SONET OC-48 CDR System in 0.18μm CMOS </h2>
			    <div class="inner">
					A clock data recovery circuit for SONET OC-48 was designed in standard 0.18μm process. The CDR circuit
					recovers a full rate of 2.5Gbps. The total power dissipation of the system is 63mW. 
					The output data intersymbol interference (ISI) of the CDR is &lt;9.675mUI, with a jitter 
					bandwidth of 5MHz. The input data amplitude only requires 200mV, while the bufferred output achieves 
					500mV swing with a 50Ohm load.
					<h4>Design Highlights</h4>
					<ol>
						<li>To acheive high aquisition range, fast locking time and low ISI at the same time, we designed
							the system to include two loops: PLL loop and CDR loop. The two loops share the loop filter and VCO.</li>
						<li>PLL loop consists of CML-to-CMOS level-shifter, TSPC frequency divider, precharge-type phase-frequency 
							detector and charge pump. PLL loop provide wide aquisition range and short locking time.</li>
						<li>CDR loop includes Hogge Phase Detector and Gm-cell. The Hogge PD was used in the CDR loop to acheive high linearity.
							Gm-cell was employed to minimize the jitter noise.</li>
						<li>LC-VCO was designed to have a tuning range of 2.38GHz-2.6GHz from 0.8V to 1.6V. Kvco=276MHz/V. 
							Phase noise is &le;-127dBc/Hz.</li>
						<li>Compliant to SONET standard, the loop filter jitter transfer fucntion has a close-loop peaking &lt; 0.3dB.</li>
					</ol>
				</div>
			    <h2>Design of a full 802.11a WLAN transceiver</h2>
				<div class="inner">
					This is the most tough course project I have done in UCI. A group of 12 people was required to design
					a full 802.11a WLAN transeiver. We started from system design, link budge analysis, frequency planing
					, implementation of the each block and the final integration of the whole transmitter and receiver
					system. I was responsible for the design of IF and RF mixer, as well as the final system integration
					and simulation. The project was very demanding and time comsuming, nevertheless very rewarding. 
					<h4>Design Highlights</h4>
					<ol>
						<li>Link budge analysis based on indoor empirical path loss model for 10m and IEEE standard specs 
							requires NF&lt;7dB and total Gain&ape;70dB with a DR&gt;30dB. LNA Gain&ape;20dB with NF &lt;3dB;
							PA Gain&gt;20dB, Psat&gt;20dBm and etc.</li>
						<li>The transmitter employed the sliding-IF achetecture to avoid second PLL. Hence the frequency
							 planing was determined by the 802.11a chanal specifications. </li>
						<li>The receiver employed a sliding-IF dual-conversion Weaver achetecture to avoid secondary
							 PLL and to reject the image.</li>
						<li>IF and RF mixer are designed based on the Gilbert-cell structure. Current bleeding structure employed
							to linearize the mixers.</li>
						<li>We carried out the spectral mask test by injecting pseudo-random bit streams at I and Q baseband 
							, modulating the signal with Verilog modules, and upconverted by the transmitter. The spectral mask was
							violated due to the spectral regrowth from nonlinearity, especially in the vincinity of 10-20MHz. We islated
							the problem to be in the IF link. </li>
						<li>We were unable to deliver the EVM simulations within the time frame. The I/Q matching seems also be an issue
								we didn't fully investigate.</li>							
					</ol>					
				</div>
				<h2>C and SystemC modeling of JPEG encoder and RTL synthesis of DCT module using Xilinx Vivado HLS</h2>
				<div class="inner">
					SystemC and C was used to model the JPEG encoder in the specification level. The software model included the whole
					flow of JPEG encoding: file loading, RGB-to-YCC conversion, subsampling, DCT, quantization, zigzaging, Huffman encoding.
					In the whole flow, DCT was the most time comsuming part which limit the speed of the JPEG encoding. To alliviate this,
					the 2D DCT funciton was synthesized to enable fast hardware implementation. 
					<h4>Highlights</h4>
					<ol>
						<li>SystemC and C specification model was first built to simulate the JPEG encoder behavior.</li>
						<li>After the software model was verfied to be functioning properly, the DCT module was synthesized using
							Xilinx Vivado HLS tool.</li>
						<li>The synthesis of 2D DCT module was optimized to acheive small latency. The desgin goal is to 
							acheive continuous data feeding every 50 cycles.</li>
						<li>By pipelining the design and partition the data port, the design goal was acheived and the operation interval
							was brought down to &lt;50 cycles on a Kintex 7 board with good compromise with design area.</li>
						<li>The input and output port of the DCT module were synthesized as FIFO port confining to the AXI interconnect. </li>
						<li>Both VHDL and Verilog RTL synthesis was generated.</li>
					</ol>
				</div>
				<h2>RTL design and synthesis of a 16 bits CPU using VHDL in Xilinx ISE</h2>
				<div class="inner">
					The 16 bits CPU was designed using VHDL in Xilinx ISE. The consisting modules includes
					 ALU, Regfile, RAM, ROM, MUX and Control Unit. The model was tested by estublishing a
					 test bench combining all the units. The testing clock was 10MHz.
					 <h4>Design Highlights</h4>
					 <ol>
					 	<li>The ALU unit supports the following operations: AND, OR, XOR, Right Shift, 
					 		Signed/Unsigned Left Shift and Add, Substract with and without carrier.</li>
					 	<li>Regfile module simulates a 8 register system. Each register is also 16 bits. Both Read and Write
					 		operations are supported.</li>
					 	<li>The RAM module simulates a 64x8 RAM by using a 8 bits logic vector array of size 64. Both 
					 		Read and Write operation are supported by using a read/write flag.</li>
					 	<li>The ROM module simulates the ROM functionality by storing a set of constants reprenting full instructions in it. The testing
					 		was done by loading the instructions to the CPU and execute them.</li>
					 	<li>Control Unit controls the operation of the whole CPU, including State control, Instruction loading, MUX selection and etc.</li>
					 </ol>
				</div>
				<h2>Design of a 25GHz frequency synthesizer with 97.7MHz reference in 90nm CMOS</h2>
				<div class="inner">
					A 25GHz frequency synthesizer was designed using 90nm CMOS technology. The reference frequency
					was 97.7MHz. The tuning range of the VCO was from 24GHz to 27GHz with quadrature outputs. The total
					power comsumption was 80mW with 1.2 supply voltage. We measured a phase noise of -101dBc/Hz at an
					offset of 1MHz.
					<h4>Design Highlight</h4>
					<ol>
						<li>The design consist of QVCO, Injection-locked frequency divider, CML frequency divider, 
							CMOS digital frequency divider, Phase-frequency detector, Charge-pump and Loop-filter.</li>
						<li>Bottom-series QVCO structure was used to acheive low phase noise. Across the coupling
							transistor, negative-Gm cell and LC oscillators are connected in parallel.</li>
						<li>The first freqency divider following the VCO has to work with very high input frequency,
							hence the injection-locked type frequency divider was used to halve the frequency
							to ~12.5GHz.</li>
						<li>Three stages of CML frequncy divider were inserted after the ILFD to further divide
							the frequency to ~1.5GHz. CML FD need to be designed with careful trade-off between speed
							and power comsumption.</li>
						<li>Four static CMOS divde-by-two FD was chained after the CML FD's to form a div-16 FD in order
							to acheive the reference clocking. The static FD's are designed using looped NAND-gates based 
							D-flipflop's.</li>
						<li>Phase-frequency detector consisted of the conventional 10 gates design and the charge pump. Gate-delay
							compensation techniques was used to align the pulses. </li>
						<li>Loop-filter was designed to ensure adquate phase margin to ensure stability. A phase-margin of 62 degree and bandwidth
							of ~6MHz was used. </li>
					</ol>
				</div>
				<h2>Design of a 3 bit 4Gsamples/sec flash ADC in 90nm CMOS</h2>
				<div class="inner">
					A 3 bit 4Gsamples/sec flash ADC was designed in 90nm CMOS technology. We tested a INL&lt;0.5 LSB and DNL &lt;0.8 LSB.
					The SNDR was measured to be 5.3dB. This value is smaller than the ideal maxima. We beleive we can improve
					this metrics, however the high speed nature of the designed ADC will pose challenge on the design.
					<h4>Design Highlights</h4>
					<ol>
						<li>Resisitor ladder divider was used to improve the accuracy and matching. 
							Offset resistor was added on the top and bottom to shift the reference voltage range
							to the linear region. Quantization step was set to ~0.07V.</li>
						<li>Comparator consists of a pre-amp and a latch. The pre-amp is a resistor-loaded differential CS amplifier
							in order to improve the speed. The regenerative latch will regenerate and amplify the output
							signal periodically. Fast speed is acheived through the positive feedback.</li>
						<li>To eliminate the bubbles in  thermometer code from the resistor ladder comparator network, 
							Three input NAND gates is inserted after the comparators to correct the bubble errors.  The output will
							be a simpler coding easier for decoding. High speed 3-input NAND gate is acheived by cascading 2-input NOR and 2-input NAND gates.</li>
						<li>Lastly, the 8 bit code was decoded to 3 bit binary code through ROM-based decoder.</li>
						<li>Finally, a flip-flop latch was inserted at the very end of the chain to improve the 
							ADC's speed and cleanness. The flip-flop was based on TSPC to increase the operating speed.</li>
					</ol>
				</div>
				<h2>Design of 8 bit 32x32 digital camera array in 0.5um UltraCMOS® SOS technology from Peregrine Semi.</h2>
				<div class="inner">
					While the bulk silicon CMOS technology has been widely use in conventional integrated circuit. 
					Silicon-on-insulator CMOS technology has also gaining momentum in modern high-speed and low-power
					IC design owing to their superior performance in smaller stray capacitance and lower substrate leakage.	
					For example, IBM and AMD had started to fabricate their processors using SOI technology since 2001. 
					Besides the mostly referred silicon-on-silica technology, there is another type of SOI technology which
					is widely used nowasdays in the high-performance radio frequency applications, the silicon-on-sapphire
					(SOS) CMOS technology. Peregrine Semiconductor Cooperation is the main player in this business. 
					Their patanted UltraCMOS® process solved the silicon crystallization issue in SOS and has brought
					SOS to a new applications stage. 
					<h4>Design Highlights</h4>
					<ol>
						<li>A 32&times;32 digital pixel array was designed using 0.5um UltraCMOS® process. The process uses
							a supply voltage of 3.3V.</li>
						<li>Unlike bulk CMOS, SOS technology is able to build compatible PN junctions with large areas. This
							makes high efficiency photodiode possible in SOS. 20um &times; 20um PN junctions was used.</li>
						<li>The four-transistor active-pixel-sensor cell was used in the design. The cell included the 
							PN photodiode, a Read gate, a Reset gate, a common-source amplification gate and a column/row selecion
							gate. </li>
						<li>Scan shift register circuit was used to generate the frame refreshing signal for the pixel array. The
							scan shift register was based on the flip-flop chain.</li>
						<li>An 8 bits SAR ADC was used in the design to converted the analog signal to the 8 bits digital signal.</li>
						<li>The SAR ADC used a C-2C ladder capacitive charge-redistribution topology combined with a switched 
							capacitor comparator. C-2C SAR ADC on SOS is simple to design and comsume very low power, while
							delivering acceptable speed. The designed ADC works up to 400kSamples/s with a SNDR>40dB@2kS/s.</li>
						<li>Testing showed that the camera design can operate with a frame rate as high as 50fps. The total power
							comsumption was 0.3mW, mainly from pixel array and amplifier.</li>
					</ol>
				</div>
				<h2>Design of Class-E and Class-F PA using 65nm technology</h2>
				<div class="inner">
					This is a small homework project for RFIC design class. In this project, a Class-E and a Class-F PA
					were designed using the 65nm CMOS technology. We were required to acheive maximium output power of
					&gt;20dBm and power efficiency&gt;50%. The operating frequency is 2.4GHz and the supply voltage is
					1.2V. Inductors had limited Q&lt;12 and resonance frequency&lt;5f0. All the specs were met.
					<h4>Design Highlights</h4>
					<ol>
						<li>Class-E PA is a type of nonlinear PA in which the network at the drain of the transistor is designed
							in a way that the reactive loading will force a zero value and a zero slope on the switching 
							voltage simultaneously at the swith turn-on time. Particularly, a capacitor is inserted 
							parallel to the BFL to pin the drain voltage when the input voltage drops. Ideally, class-E
							PA can reach a power efficiency of 100%. However, the swithing loss and the swith turn-off
							power dissipation will lower the efficiency. Also the efficiency will be often traded to 
							delivery a higher linearity.</li>
						<li>The design class-E PA had a saturated power of 20.2dBm, power efficiency of 54%, small signal gain
							of 16dB, P1dB=19dBm and OIP3=28dBm. The designed 9&ohm; load was impedance-matched to 50&ohm; using L-matching network.</li>
						<li>Class-F PA is type of nonlinear PA utilizing reactive network to provide different loading
							effects (short/open loading) for the even and odd harmonics of the fundamental harmonics to acheive
							alterating on-off on the drain current and voltage. The reactive loading network can be based on either
							transmission line or fitlers. In this design, a filter based class-F PA is designed. The 3rd and 5th order
							harmonics are tuned using prallel-LC network. </li>
						<li>The designed class-F PA had a saturated power of 20.3dBm, power efficiency of 55%, small signal gain
							of 18dB, P1dB=19.5dBm, OIP3=30.2dB. The designed impedance of 12&ohm; was matched to 50&ohm; using 
							L-matching network.</li>
					</ol>
				</div>				
				<h2>Design of 2-stage cascode op-amp and bandgap voltage reference</h2>
				<div class="inner">
					A 2-stage fully-differential folded cascode operational amplifier was designed using 0.13um CMOS 
					technology with 1.3V supply voltage. The amplifier showed a gain of 62dB and a gain-bandwidth product
					of &gt;1.1GHz. The total power comsumption was ~1mW. The phase margin was greater than 65&deg;. Sloew
					rate is greater than 128V/us. Step response overshoot is smaller than 0.1%. Input-referred noise was smaller
					than 0.6nV/&radic;Hz.A bandgap current reference was also designed to acheive a constant current of 100uA
					with a variation &lt;0.2% from 20&deg;C to 100&deg;C. 
					<h4>Design Highlights</h4>
					<ol>
						<li>Bandgap voltage reference circuit was designed by combining the PTAT and CTAT circuits. NPN bipolar
							transistors are used along with stacked high-compliance current mirrors. Constant current source was
							acheived by combining the bandgap reference with a gated feedback op-amp.</li>
						<li>The first stage is a folded cascode topology was used to provide high gain and input swing at the same time. 
							The second stage is a simple PMOS-loaded differential common-source amplifier. </li>
						<li>Frequncy compensation was employed to acheive good phase margin to assure stability.</li>
						<li>Common-mode feedback technique also used to ensure the circuit operating across different
							temperature corners.</li>
						<li>However, the required gain-bandwidth-product of 2GHz was not acheived. All other specs were 
							readily met.</li>
						
					</ol>
				</div>
				<h2>Single stage LNA using NE3210 N-channel hetero-junction FET using ADS</h2>
				<div class="inner">
					A single stage low noise amplifier operating from 5GHz to 7GHz was design based on the mearsured
					 S parameters for NE3210 N-channel hetero-junction FET. For practical reason, bias, pads, VIA and lead transition
					 and other technology constrains are considered. The acheived gain ranged from 13.45dB to 13.69dB with a gain
					 flatness of &lt;0.24dB. Noise figure is &lt;0.833dB. VSWR at the input and output is &lt;8.62:1 and &lt;1.998:1 
					 respectively.
					 <h4>Design Highlights</h4>
					 <ol>
					 	<li>First, we investigated the stability factor and gemoetrical stability factor. These values revealed that
					 		the amplifier is conditionally stable. Hence, we need to ensure the source and load are in the stable region
					 		of the source stability circles and load stability circle. </li>
					 	<li>Next, the available gain circle and noise circle are drawn in the the same figure for the convenience
					 		of proper trade-off. Optimal source impedance and laod impedance are selected based on the GA and Noise
					 		circles. It is also verified that the amplifier is in the stable region for the whole operating frequency
					 		range.</li>
					 	<li>Selected optimal source and load impendances are both complex values and need to be impedance matched to
					 		50&ohm;. A stub based matching network is used with the help of Smith Chart.</li>
					 	<li>A final optimization is also carried out with the help of the optimization tool in ADS.</li>
					 	<li>The circuit was also layouted using Express PCB.</li>
					 </ol>
				</div>
				<h2>Distributed amplifier design based on InGaAs MESFET model using ADS</h2>
				<div class="inner">
					A distributed amplifier based on InGaAs MESFET model is designed using ADS simulation environment.
					Five MESFET is connected using transmission lines to acheive the distribution network. 
					 The final design acheived an average gain of 12dB within the 1dB bandwidth. By confining the gain
					 fluctuation within 1dB, a bandwidth of 36GHz is acheived, which gives a gain-bandwidth product of
					 108GHz. This beat the GBP of the device, which is the direct benefit of the distributed amplifier. However,
					 this is acheived at the price of large fringe-print of 0.4mm&prod;0.25mm.
					 <h4>Design Highlights</h4>
					 <ol>
					 	<li>Theoretical analysis is first carried out referring to the famous article "MESFET distributed amplifier design guidelines"
					 		by J. B. Beyer, et al. The device with highest acheivable Gain-bandwidth product is chosen.</li>
					 	<li>The gate line and drain line need to be matched in group delay to acheive in-phase construction and 
					 		hence the distributed amplification.</li>
					 	<li>Simplified model with ideal capacitor and inductors are first used to approach an initial design.</li>
					 	<li>Real design based on transmission lines and realistic inductors designed using HFSS was then used to replace
					 		the ideal components.</li>
					 	<li>The presence of coupling capacitor Cgd between gate and drain diviate the behavior of the real circuit from
					 		the theoretical behavior modeled as in step #1. And final optimization is required to enventually acheive higher Gain-bandwidht
					 		product.</li>
					 </ol>
				</div>
				<h2>Modeling of singled-ended and differential spiral inductors using HFSS</h2>
				<div class="inner">
					Spiral inductors are widely used in modern RF integrated circuit. In fact, it
					is one of the driving horse of modern RFIC by enabling integrable on-chip inductors.
					Here spiral inductors are designed for both single-ended and differential configuration 
					in a PCB with 6 metal layers. The design is done in Ansoft HFSS.
					<h4>Design Highlights</h4>
					<ol>
						<li>Theoretical estimation of the inductor sizing is first carried out based on the 
							famous "Simple Accurate Expressions for Planar Spiral Inductances" by Tom Lee.</li>
						<li>The inductors are modeled in the HFSS software using 3D simulation.</li>
						<li>To increase the quality factor (Q) value, M6 and M5 are interconnectted through
							dense VIA's to increase the metal line cross-section and hence reducing the Ohmic loss.</li>
						<li>The single-ended inductor is designed for 1.6GHz with a inductance of 1.5nH and a Q of
							11.8. The self-resonance frequency is 30GHz. The inductor size is 140um&times;140um.
							Regtanglar shape is used.</li>
						<li>The differential inducotr is designed for 2.4GHz with an inductance of 1.8nH both sides.
							The quality factor Q=13.2. The self-resonance frequency is 26GHz. The inductor size is
							160um&times;160um.</li>
						<li>Mesh size has to be dense to ensure accurate simulation of the indcutor. The simulation
							also need to be setup to also solve inside metal to acurately estimate the Ohmic loss and
							skin effect.</li>
					</ol>
					
				</div>
				<h2>Design of Branch-line hybrid based 3dB and 10dB power divider in ADS and AWR</h2>
				<div class="inner">
					Branch-line coupler is a type of quadrature coupler based on transmission lines. To acheive a
					one-to-two power divider/coupler, one of the port (denoted Port 4) is isolated by terminating
					with proper impedance. Each arm in the single-box branch-line hybrid is a quarter wavelength
					transmission line. The characteristic impedance of each arm depends on the desired 
					power-division ratio.  Normally, the terminal impedances are matched to 50 &ohm; 
					For microwave applications, a quarter wavelength often implies large PCB area. To alliviate this
					issue, reduced-size branch-line hybrids are designed with capacitive loading at the four terminals.
					In this way, the electrical length of each arm can be reduced, however. at the price of lower operating
					bandwidth. The bandwidth can be increased by cascading sections, just like in Wilkinson Power Divider.
					<h4>Design Highlights</h4>
					<ol>
						<li>Both Ansoft HFSS and AWR Mircowave Office are used in the design</li>
						<li>Both designs start from ideal transmission line and end up with practical microstrip 
							transmission line model</li>
						<li>The design wavelength is 900MHz.</li>
						<li>Microstrip Tee structre was inserted to simulate practical senario. Mircrostrip Tee
							helps on impedance matching and bandwidth. The transmission line length also need to
							be properly reduced to compensate the phase delay from the Tee's.</li>
						<li>Both 3dB and 10dB branch-line power divider has a bandwidth of 100MHz with the power 
							ratio within &plusmn;0.2dB of the designed values. </li>
						<li>The size of the 3dB coupler was 1817mil&times;1930mil and the size of the 10dB coupler
							is 1714mil&times;1782mil for 10dB. </li>
						<li>The reduced-size coupler reduced the size to 550mil&times;620mil for 3dB and 513mil&times;
							604mil. However the bandwidth reduced to ~80MHz.
							</li>
					</ol>
				</div>
				
				<h2>Phased-array antenna design</h2>
				<div class="inner">
					<ol>
						<li>A linear-phased antenna array was designed to delivery the endfire radiation pattern as required.</li>
						<li>Elementary antena are based on half-wavelength dipoles. </li>
						<li>Coupling between different antenna were modeled by coupling Z-matrix.</li>
						<li>Linear phased voltage was first feeded to the the antena array and then modified to generate
							linear phased current to deliver ideal endfire radiation.</li>
						<li>Modeling and simulation were done in Python Scipy.</li>
					</ol>
					 
					
				</div>
				<h2>Implementation of LMS and RLS equalization filtering algorithm in communication system</h2>
				<div class="inner">
					Channels in communication system are never ideal and nonidealities in the channel will cause ISI, 
					distort	the signal, degrade the SNR and hence lower the BER of the system. In order to alliviate this
					effect, equalization filter is introduced into the communication system to restore the distorted
					signal. The feedforward traversal equalizers are simple and capable of dealing with channels
					with stable characteristics, e.g. network/TV cables. They are limited in senarios where the channel
					is dynamic, e.g. wireless channels. In these cases, decision feedback equalizers are necessary. The
					most widely used decision feedback equalizers include least mean-square (LMS) equalizer and 
					recursive least-square (RLS) equalizer.
					<h4>Highlights</h4>
					<ol>
						<li>LMS  is a type of adaptive filtering algorithm capable of finding a set of filter
							coefficient to minimize the mean-square-error. In the adaptive iteration,
							the filter coefficient is adjusted according to the current input signal, the error
							magnitude and a weight parameter &Delta;, which is used to control the convergence performance. </li>
						<li>A sequence of 505 psudo-random symbols was generated to train the equalization adapter filter with
							11 tap coefficients. For &Delta;=0.055, it only took 120 iterations to converge, however when &Delta;
							=0.0138 the convergence took 500 iterations. The converged MSE's were better than -27dB.</li>
						<li>Simulation results show that a greater &Delta; value will lead to faster convergence, however at the price
							of a less stable convergence and hence degraded worst-case MSE.</li>
						<li>RLS is a type of adaptive filtering algorithm which recursively finds the filter coefficients that
							 minimize a weighted linear least squares cost function relating to the input signals. While the basic
							 idea is similar to the LMS filter, the square-error cost function is more complicated and difficult to
							 implement than LMS. The advantage of RLS is a much higher convergence speed.</li>
						<li>For the same testing case, the convergence will only takes 25 iterations when the &lambda; value was
							properly chosen. Smaller &lambda; will lead to faster convergence at the price of worse converged
							MSE.</li>
						<li>RLS is much faster than LMS in terms of convergence time. However, its final MSE (-25dB) was also
							higher than LMS.</li>
					</ol> 
				</div>
				<h2>Text recognition with SVM algorithm from leaky microwave collected by antenna</h2>
				<div class="inner">
					This was a research project conducted with another classmate when I was a undergraduate student.
					We investigated the possible information leakage from the computer radiation. The computer radiation
					from mainly the display was captured through a powerful antenna. The received antenna signal was then
					regenerated, enhanced and then recognized using the support-vector-machine (SVM) algorithm. The received 
					antenna signal was reconstructed and processed using C++. The SVM algorithm was implemented using 
					Matlab taking its advantage of matrix operations. 
					<h4>Highlights</h4>
					<ol>
						<li>The antenna signal was filtered, pre-amplifed, synchronized, phase-locked amplified, converted to
							digital signal, and then averaging filtered and finally filtered using matching-filters.</li>
						<li>The reconstructed images were then partitioned using a threshould-based cutting algorithm.</li>
						<li>A two-layered SVM network with 60 SVMs is constructed to recognize the text information. The
							first layer of SVMs were partitioned based the resembalance of character groups. The second layer
							will handle each distinct character. </li>
						<li>The SVM network was trained using 3100 different samples.</li>
						<li>The final recognition acurracy reached 99.2% for large fontsize and 94.2% for smaller fontsizes.</li>
					</ol>
					For details, please refer to 
					<a href="http://dx.doi.org/10.1016/j.cose.2008.09.009">Hongxin, Zhang, Huang Yuewang, Wang Jianxin, Lu Yinghua, and Zhang Jinling. "Recognition of electro-magnetic leakage information from computer radiation with SVM." Computers & Security 28, no. 1 (2009): 72-76.
					</a>
				</div>
				<h2>A GSM call dialing system on Linux-based ARM-10 embedded system </h2>
				<div class="inner">
					This was a undergraduate summer project. In this project, I implemented a GSM call dialing system
					on a ARM-10 embedded system OURS-PXA270 loaded with Redhat Linux. The embedded system coordinated
					the LCD display, USB mouse, microphone, and the GSM/GPRS module (WAVECOM Q2403A). Basic functionalities
					including dialing, text message (both sending and receiving) were successfully implemented. 
					<h4>Highlights</h4>
					<ol>
						<li>The interaction with the system was done through the mouse clicking on the 
							GUI displayed on the LCD. The GUI system was implemented using Qt in C++. The signal/slot 
							machanism in Qt was thoroughly explored. </li>
						<li>The communication between the GSM module and the processor core is through serial port communication.
							The AT-instruction set was used to communicate and sending different instructions. </li>
						<li>The driver for USB mouse, LCD display and serial port were loaded into the kernel first.</li>
						<li>All the implementation was based on C++ in Linux.</li>
					</ol>

				</div>
				<h2>A temperature measure, display and control system based on single-chip microprocessor</h2>
				<div class="inner">
					SPCE061A single-chip microprocessor from Sunplus MCU was used to design a temperature monitoring
					and control system. The system had the functionalities including the measurement, display,
					and control of the temperature.
					<h4>Highlights</h4>
					<ol>
						<li>The temperature sensing was based on thermosistor. The thermosistor characteristic
							lookup table was stored in the microprocess memory.</li>
						<li>Real time temperature reading derived from the thermosistor current was displayed 
							on the LCD display of the micro controller. </li>
						<li>A thermal heater was also included to the system. The system can be set to a desired
							 temperature and the heater will be controlled by the microprocess to approach the 
							 target temperature. PID control mechanism was also used in the C++ code.</li>
						<li>The implementation was based on C++.</li>
					</ol>
				</div>				
				<h2>Implemented an instrumentation amplifier using 3 LM741 chips</h2>
				<div class="inner">
					This was a one day electronics design contest project in 2008 Beijing
					 College-student Electronics Design Contest. We won a 1st prize in the contest due to
					 the superior performance of our amplifier. The amplifier was based on the instrumentation
					 amplifier structure. Three LM741 op-amps were used in the implementation. We acheived very good
					 permance metrics including low DC offset, low drift, low noise, high open-loop gain,  high common-mode 
					  rejection ratio, and high input impedances. However, I didn't remember the exact values because those
					  were taken on spot by the judges and no notes was taken during that time.
				</div>				
				<h2>VHDL driven FPGA based Snake game system thru VGA interface</h2>
				<div class="inner">
					This was a undergraduate digital design project. In this project, the Snake game was implemented using
					VHDL. The game was displayed on the CRT display through the VGA interface. Both the game logic and the
					driver for keybord and VGA interface were implemented in VHDL. A lot work was done to optimize the
					VHDL logic to combine all these components due to limited programmable logic gates on the FPGA board.
					Extensive usage of finite-state-machine design methodology was explored.
				</div>
				<h2>Raspberry Pi based morning bedtime terminator</h2>
				<div class="inner">
					Everybody loves the warm blanket in the morning and can't stop sleeping longer. You can miss important things
					just because of this. You will never have to worry about this now with the morning bedtime terminator. 
					<h4>Highlights</h4>
					<ol>
						<li>This hobby system was extremely cheap and only took the cheap $35 Raspberry PI, a several dollars pully, a rope, a relay 
							and a electric fan.</li>
						<li>When the set time reached in the morning, the GPIO pins activate the relay and start the electric fan. The
							fan then pulls the pully to hang you blanket up to the ceiling. And you HAVE to get up now without the 
							warm blanket <img width="20px" height="20px" src="img/giggling.gif" /></li>
						<li>The Raspberry Pi host a mini webserver using the Python-based Flask framework. We can set the 
							alarm time through a web browser from a computer or smart phone.</li>
					</ol> 
				</div>
				<h2>Raspberry Pi based door bell system</h2>
				<div class="inner">
					This is another hobby project when I was playing with the Raspberry Pi. The system can be combined with the door
					bell to include web camera and microphone. The implementation and details are listed in the Highlights.
					<h4>Highlights</h4>
					<ol>
						<li>When the door bell pulse signal triggered the Raspberry Pi through GPIO, the web camera will be 
							started to capture video. iHome webcamera was used in the system. The video was captured using
							the Python simpleCV module, which is a taylared version of the python-opencv module. </li>
						<li>The microphone was also incoparate into the system to enable conversation. However, a seperate 
							power amplifier was needed.</li>
					</ol>
				</div>
				<h2>Arduino UNO based iced/hot water maker</h2>
				<div class="inner">
					This is my other hobby project using Arduino UNO to make a iced water maker on desktop. The application
					make use of Peltier device to cool the water. PWM signal from Arduino UNO's GPIO pin was used to control
					the cooling process.
					<h4>Highlights</h4>
					<ol>
						<li>Peltier device based on the thermoelectric effect in semidcondutor was used to cool the water.</li>
						<li>The pulse-width-modulated signal from the GPIO of Arduino UNO was used to control the positive and 
							negative cycle of the Peltier device in order to reach the proper temperature.</li>
						<li>Thermosistor was used to monitor the temperature and feedback to the Arduino UNO to adjust the
							duty cycle of the PWM pulse.</li>
						<li>The target temperature can also be set in the UNO. The system can even be used to heat
							water (e.g. coffee) by switch the polarity of current to the Peltier device. </li>
						<li>All the programing was done using C++ in Arduino UNO through the Wiring library. </li>
					</ol>
				</div>
	  		</div>  <!-- end of accordion -->
	  	</div>  <!-- end of content -->
	  		  		
	<?php include_once "footer.php" ?>

</html>