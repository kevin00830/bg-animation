<html>
	<style>
	    *, *::after, *::before {
	      box-sizing: border-box;
	    }
	    :host, .host {
	      display: block;
	      visibility: visible;
	      width: auto;
	      height: auto;
	      contain: content;
	      box-sizing: border-box;
	      --cssd-uniform-time: 0
	    }
	    :host([hidden]), .host[hidden] {
	      display: none
	    }
	    .container {
	      position: relative;
	      width: 100%;
	      height: 100%;
	      display: grid;
	      grid: inherit;grid-area: inherit;grid-auto-columns: inherit;grid-auto-flow: inherit;grid-auto-rows: inherit;grid-column: inherit;grid-column-end: inherit;grid-column-gap: inherit;grid-column-start: inherit;grid-gap: inherit;grid-row: inherit;grid-row-end: inherit;grid-row-gap: inherit;grid-row-start: inherit;grid-template: inherit;grid-template-areas: inherit;grid-template-columns: inherit;grid-template-rows: inherit;
	    }
	    cell {
	      position: relative;
	      display: grid;
	      place-items: center
	    }
	    svg {
	      position: absolute;
	      width: 100%;
	      height: 100%
	    }
	    :host([cssd-paused-animation]),
	    :host([cssd-paused-animation]) * {
	      animation-play-state: paused !important
	    }
	  </style>
	  <style class="style-keyframes">
		  @keyframes move { 
			  
				to {
				  -webkit-background-size: 50vmax 50vmax; background-size: 50vmax 50vmax;
				}
			  
			 }
		  @keyframes move-1 {
			
			  
				to {
				  -webkit-background-size: 50vmax 50vmax; background-size: 50vmax 50vmax;
				}
			  
			
		  }
		
		  
		  @keyframes move-2 {
			
			  
				to {
				  -webkit-background-size: 50vmax 50vmax; background-size: 50vmax 50vmax;
				}
			  
			
		  }
		
		  
		  @keyframes move-3 {
			
			  
				to {
				  -webkit-background-size: 50vmax 50vmax; background-size: 50vmax 50vmax;
				}
			  
			
		  }
		
		  
		  @keyframes move-4 {
			
			  
				to {
				  -webkit-background-size: 50vmax 50vmax; background-size: 50vmax 50vmax;
				}
			  
			
		  }
		</style>
		
	<style class="style-container">
	    :host, .host {
	      grid-template-rows: repeat(2, 1fr);
	      grid-template-columns: repeat(2, 1fr);
	    }
	  :host, .host { width: 100vw;
	      height: 100vh; }
	</style>
	<style class="style-cells">#c-1-1-1 { -webkit-transform: translateZ(0); transform: translateZ(0);
	-webkit-backface-visibility: hidden; backface-visibility: hidden;
	will-change: background-size;
	-webkit-background-size: 200vmax 200vmax; background-size: 200vmax 200vmax;
	background-position: 0 0;
	background-image: repeating-linear-gradient( -45deg, rgba(28,15,36,1) 0 calc(5vmin),transparent 0 calc(5vmin + 5vmin) );
	-webkit-animation: move 150s linear infinite; animation: move 150s linear infinite; }#c-2-1-1 { -webkit-transform: translateZ(0); transform: translateZ(0);
	-webkit-backface-visibility: hidden; backface-visibility: hidden;
	will-change: background-size;
	-webkit-background-size: 200vmax 200vmax; background-size: 200vmax 200vmax;
	background-position: 100% 0;
	background-image: repeating-linear-gradient( 45deg, rgba(28,15,36,1) 0 calc(5vmin),transparent 0 calc(5vmin + 5vmin) );
	-webkit-animation: move-2 150s linear infinite; animation: move-2 150s linear infinite; }#c-1-2-1 { -webkit-transform: translateZ(0); transform: translateZ(0);
	-webkit-backface-visibility: hidden; backface-visibility: hidden;
	will-change: background-size;
	-webkit-background-size: 200vmax 200vmax; background-size: 200vmax 200vmax;
	background-position: 0 100%;
	background-image: repeating-linear-gradient( -135deg, rgba(28,15,36,1) 0 calc(5vmin),transparent 0 calc(5vmin + 5vmin) );
	-webkit-animation: move-3 150s linear infinite; animation: move-3 150s linear infinite; }#c-2-2-1 { -webkit-transform: translateZ(0); transform: translateZ(0);
	-webkit-backface-visibility: hidden; backface-visibility: hidden;
	will-change: background-size;
	-webkit-background-size: 200vmax 200vmax; background-size: 200vmax 200vmax;
	background-position: 100% 100%;
	background-image: repeating-linear-gradient( 135deg, rgba(28,15,36,1) 0 calc(5vmin),transparent 0 calc(5vmin + 5vmin) );
	-webkit-animation: move-4 150s linear infinite; animation: move-4 150s linear infinite; }
	</style>

	<body style="margin: 0px; height: 100vh;
    margin: 0px;
    z-index: -2;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background: linear-gradient(90deg, rgb(21, 15, 26) 0%, rgb(10, 7, 12) 100%);
    background-color: rgb(10, 7, 12);
    color: #FFF;
    line-height: var(--chakra-lineHeights-tall);">
		<svg id="defs" xmlns="http://www.w3.org/2000/svg" style="width:0;height:0"></svg>
		<grid class="container" style="display: flex; height: 50%;">
				<cell id="c-1-1-1" style="width: 50%; height: 100%;"></cell>
				<cell id="c-2-1-1" style="width: 50%; height: 100%;"></cell>
		</grid>
		<grid class="container" style="display: flex; height: 50%;">
				<cell id="c-1-2-1" style="width: 50%; height: 100%;"></cell>
				<cell id="c-2-2-1" style="width: 50%; height: 100%;"></cell>
		</grid>
	</body>

</html>	