/**
 * WordPress dependencies
 */
import { G, Path, SVG } from '@wordpress/components';

export const SenseiIcon = ( props ) => (
	<SVG
		{ ...props }
		xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 256.000000 256.000000"
		preserveAspectRatio="xMidYMid meet"
	>
		<G
			transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)"
			stroke="none"
		>
			<Path
				d="M1174 2541 c-28 -3 -58 -12 -67 -19 -9 -8 -25 -11 -37 -7 -11 3 -20
			2 -20 -4 0 -5 -11 -8 -25 -5 -14 2 -25 0 -25 -6 0 -5 -13 -10 -30 -10 -16 0
			-30 -4 -30 -9 0 -4 -23 -11 -52 -14 -28 -4 -54 -11 -58 -16 -3 -6 -25 -13 -48
			-17 -23 -3 -39 -10 -37 -15 3 -4 -10 -11 -30 -15 -19 -3 -33 -9 -31 -13 2 -3
			-15 -15 -37 -26 -23 -11 -48 -26 -55 -32 -7 -7 -19 -13 -27 -13 -7 0 -15 -7
			-19 -15 -3 -8 -12 -15 -21 -15 -8 0 -15 -4 -15 -9 0 -5 -8 -12 -17 -15 -47
			-15 -189 -157 -290 -291 -5 -5 -32 -59 -61 -120 -29 -60 -58 -118 -63 -127 -5
			-10 -9 -25 -9 -33 0 -10 -5 -13 -11 -9 -9 5 -10 -1 -5 -20 4 -15 2 -26 -4 -26
			-5 0 -9 -10 -9 -22 1 -23 -13 -104 -31 -186 -13 -54 -13 -254 -1 -301 6 -20
			15 -71 22 -114 7 -43 15 -80 20 -82 4 -3 5 -15 1 -27 -3 -14 -2 -19 6 -14 7 4
			12 2 12 -4 0 -6 14 -38 30 -72 17 -33 30 -64 30 -70 0 -5 7 -16 15 -24 8 -9
			15 -24 15 -35 0 -10 4 -19 8 -19 5 0 14 -10 19 -23 23 -47 145 -179 177 -191
			10 -3 16 -12 13 -21 -4 -8 -1 -12 6 -10 7 3 34 -16 60 -40 27 -25 53 -45 59
			-45 6 0 19 -9 29 -21 9 -11 29 -21 43 -23 14 -1 29 -5 32 -9 3 -3 12 -3 20 0
			8 3 14 -1 14 -11 0 -9 -8 -16 -17 -16 -14 0 -9 -8 16 -30 18 -17 38 -30 43
			-30 6 0 8 -6 5 -13 -4 -10 2 -13 20 -9 18 3 24 1 19 -6 -4 -7 3 -14 19 -18 14
			-3 25 -10 25 -14 0 -4 18 -10 40 -14 22 -3 40 -11 40 -17 0 -6 7 -9 15 -5 9 3
			21 -4 31 -19 9 -14 25 -25 35 -25 10 0 20 -4 23 -9 4 -5 25 -12 49 -16 23 -4
			47 -11 53 -16 12 -10 246 -5 263 5 5 4 12 2 16 -4 8 -13 41 -13 82 2 27 10 38
			10 53 0 27 -17 71 -15 109 4 28 14 56 21 99 26 6 1 12 5 12 10 0 4 11 8 25 8
			14 0 25 4 25 10 0 5 15 12 33 15 19 4 40 15 47 25 10 14 22 17 51 13 26 -4 39
			-2 39 6 0 6 5 11 11 11 6 0 27 13 46 30 18 16 44 30 58 30 13 0 26 6 28 13 4
			9 8 8 16 -3 7 -10 11 -11 11 -2 0 6 6 12 13 12 18 0 49 24 134 104 40 38 73
			75 73 83 0 7 4 13 8 13 5 0 17 16 28 35 10 19 22 35 25 35 4 0 10 11 13 25 4
			14 11 23 16 20 6 -3 10 1 10 9 0 21 42 116 51 116 4 0 10 13 14 30 4 16 11 30
			16 30 5 0 9 9 9 20 0 11 5 20 11 20 6 0 8 9 4 20 -3 11 -2 20 3 20 5 0 18 40
			30 90 18 71 22 120 22 240 0 82 -4 169 -10 192 -5 24 -17 97 -26 163 -9 66
			-19 122 -23 125 -3 3 -15 30 -25 60 -11 30 -26 66 -33 80 -7 14 -13 31 -13 38
			0 6 -4 12 -10 12 -5 0 -12 11 -16 25 -3 14 -10 25 -14 25 -4 0 -10 8 -14 18
			-6 20 -25 50 -43 70 -7 7 -13 18 -13 23 0 5 -5 15 -10 22 -41 48 -50 62 -50
			74 0 7 -5 13 -11 13 -6 0 -9 7 -6 14 4 10 1 13 -8 10 -8 -4 -20 6 -28 23 -13
			25 -170 181 -209 208 -31 22 -54 35 -73 44 -11 5 -30 18 -42 30 -12 11 -33 23
			-47 27 -14 3 -26 10 -26 15 0 5 -8 9 -17 9 -10 0 -31 7 -47 15 -15 8 -35 15
			-42 15 -8 0 -14 4 -14 10 0 5 -10 10 -22 10 -13 0 -63 6 -113 13 -111 18 -313
			27 -381 18z m381 -201 c-4 -6 6 -10 22 -10 45 0 103 -12 98 -20 -3 -4 14 -10
			37 -13 22 -3 44 -10 47 -15 3 -5 20 -13 37 -16 17 -4 40 -15 50 -25 11 -9 22
			-18 26 -19 24 -8 44 -17 54 -26 6 -6 22 -18 35 -26 38 -24 169 -161 169 -176
			0 -8 5 -14 11 -14 6 0 9 -7 6 -14 -4 -10 -1 -13 9 -9 10 4 12 0 7 -13 -4 -12
			-3 -15 5 -10 7 4 12 1 12 -7 0 -8 7 -20 16 -28 9 -7 14 -22 11 -35 -3 -15 0
			-21 9 -17 8 3 16 -5 20 -21 3 -14 10 -26 14 -26 5 0 12 -20 16 -45 3 -25 10
			-45 15 -45 5 0 9 -7 9 -16 0 -9 6 -28 14 -42 24 -48 46 -102 46 -117 0 -7 6
			-15 13 -17 16 -6 18 -455 1 -466 -6 -4 -14 -42 -17 -86 -3 -43 -10 -83 -16
			-89 -6 -6 -11 -19 -11 -30 0 -10 -4 -16 -9 -13 -5 3 -11 -17 -15 -44 -4 -28
			-10 -50 -15 -50 -5 0 -11 -14 -15 -31 -4 -23 -10 -30 -21 -25 -9 3 -13 2 -10
			-4 10 -16 -5 -52 -20 -46 -8 3 -11 -2 -8 -13 3 -11 -8 -32 -29 -53 -18 -20
			-42 -47 -54 -59 -27 -30 -105 -99 -134 -119 -12 -8 -28 -21 -36 -27 -7 -7 -15
			-13 -19 -13 -4 0 -14 -7 -22 -16 -9 -8 -24 -13 -34 -11 -10 3 -16 0 -14 -7 4
			-11 -57 -56 -76 -56 -5 0 -9 -4 -9 -10 0 -5 -18 -13 -40 -16 -22 -4 -37 -10
			-34 -15 3 -5 -6 -9 -19 -9 -13 0 -27 -3 -31 -7 -7 -7 -18 -11 -68 -20 -18 -3
			-39 -10 -46 -16 -8 -6 -113 -9 -285 -9 -149 1 -278 -2 -285 -7 -9 -5 -31 0
			-60 15 -26 12 -54 24 -62 26 -8 2 -22 10 -30 19 -8 9 -25 19 -37 23 -13 4 -23
			11 -23 16 0 5 -16 12 -35 16 -19 3 -35 10 -35 14 0 4 -16 11 -36 15 -20 3 -42
			12 -49 18 -7 7 -29 26 -49 42 -76 62 -142 138 -140 161 1 7 -4 10 -11 7 -15
			-5 -30 31 -20 47 3 6 0 7 -9 4 -10 -4 -18 1 -23 12 -3 11 -9 21 -12 24 -15 13
			-60 114 -54 123 3 6 1 7 -5 3 -7 -4 -13 7 -18 29 -3 19 -10 35 -15 35 -5 0 -9
			6 -9 14 0 7 -7 27 -15 42 -8 16 -15 41 -15 56 0 15 -4 29 -9 33 -6 3 -13 37
			-17 75 -4 39 -11 73 -15 76 -5 3 -9 73 -9 155 0 83 4 148 9 145 4 -3 11 27 15
			67 4 40 11 74 16 75 6 2 10 15 10 29 0 14 7 40 15 59 8 19 22 49 30 68 8 19
			15 39 15 45 0 6 4 11 9 11 5 0 12 14 16 30 4 17 10 30 15 30 4 0 10 8 14 18 9
			28 80 129 101 144 5 4 6 8 2 8 -4 0 11 20 34 45 24 25 49 43 55 41 8 -3 11 1
			7 9 -3 9 4 19 18 25 13 5 33 16 44 22 18 12 24 17 57 43 28 23 119 75 131 75
			6 0 21 7 31 15 11 8 28 15 38 15 10 0 18 4 18 9 0 5 19 12 43 16 23 4 45 12
			48 17 3 5 31 12 62 15 31 3 54 10 51 14 -3 5 108 9 246 9 165 0 249 -3 245
			-10z"
			/>
			<Path
				d="M820 1920 c0 -5 -6 -10 -12 -10 -26 -1 -58 -38 -58 -67 0 -26 9 -38
			50 -63 12 -7 12 -12 1 -34 -11 -21 -17 -23 -32 -13 -13 8 -15 13 -6 19 7 5 -1
			8 -20 8 -18 0 -33 -4 -33 -10 0 -5 -19 -10 -42 -10 -40 -1 -88 -26 -88 -45 0
			-14 43 -45 61 -45 9 0 19 -5 21 -12 3 -9 12 -9 36 1 41 17 47 11 31 -33 -10
			-29 -11 -43 -1 -68 14 -38 2 -56 -22 -32 -13 12 -28 15 -63 11 -25 -3 -49 -10
			-53 -17 -4 -7 -17 -10 -29 -7 -12 3 -19 1 -15 -5 3 -5 -2 -18 -12 -29 -22 -24
			-10 -52 25 -57 11 -2 21 -8 21 -13 0 -5 29 -9 65 -9 37 0 65 4 65 10 0 12 77
			14 82 2 2 -4 18 -18 36 -31 18 -13 31 -25 29 -28 -3 -2 -42 -6 -88 -9 -46 -3
			-86 -9 -89 -14 -3 -6 -41 -13 -83 -16 -42 -4 -77 -11 -77 -17 0 -5 -9 -7 -19
			-4 -14 3 -18 1 -14 -9 3 -8 0 -14 -6 -14 -6 0 -11 -9 -11 -20 0 -11 7 -20 15
			-20 8 0 15 -4 15 -9 0 -5 25 -12 55 -16 30 -3 53 -10 50 -14 -6 -11 184 -24
			229 -16 20 4 36 11 36 16 0 5 21 9 48 9 66 0 88 8 100 36 10 20 16 23 44 18
			42 -8 88 -27 88 -36 0 -5 3 -8 8 -7 15 2 52 -14 52 -22 0 -5 3 -8 8 -7 4 1 18
			-2 30 -6 18 -6 30 -2 48 15 13 12 24 18 24 12 0 -6 -16 -25 -35 -42 -19 -17
			-35 -35 -35 -40 0 -5 -5 -11 -11 -13 -6 -2 -11 -29 -11 -61 -1 -55 1 -59 44
			-102 26 -26 59 -48 77 -51 17 -4 31 -10 31 -15 0 -4 21 -9 48 -11 42 -3 47 -6
			47 -27 0 -17 -11 -29 -40 -45 -22 -11 -42 -24 -45 -27 -7 -8 -53 -24 -62 -21
			-5 1 -8 -3 -8 -8 0 -6 -9 -10 -19 -10 -11 0 -22 -4 -25 -9 -3 -5 -32 -12 -63
			-16 -32 -4 -60 -11 -63 -15 -3 -5 -41 -12 -85 -16 -44 -4 -82 -10 -85 -14 -3
			-4 -32 -11 -64 -16 -70 -11 -89 -34 -27 -34 22 0 43 -4 46 -10 7 -12 102 -13
			107 -2 2 5 38 12 81 15 75 7 79 6 104 -19 14 -14 41 -28 59 -31 19 -3 34 -10
			34 -14 0 -5 18 -9 40 -9 22 0 40 4 40 9 0 5 20 12 45 15 25 4 45 10 45 14 0
			11 77 42 104 42 14 0 28 5 31 10 3 6 22 10 41 10 26 0 34 4 34 18 0 10 -11 25
			-25 32 -20 11 -25 21 -25 52 0 21 4 38 9 38 5 0 13 9 16 20 4 11 17 32 31 47
			31 33 31 74 -1 121 -14 20 -25 32 -25 27 0 -5 -5 -4 -12 3 -7 7 -20 12 -31 12
			-10 0 -16 4 -13 9 6 8 -63 21 -115 21 -16 0 -29 5 -29 10 0 6 -9 10 -21 10
			-26 0 -59 18 -59 32 0 15 48 58 65 58 7 0 15 5 17 11 2 5 22 13 46 16 23 3 39
			9 36 14 -2 4 18 11 45 15 28 4 48 10 46 14 -3 5 23 10 57 12 50 3 67 0 80 -13
			16 -16 38 -17 230 -12 222 6 238 10 238 52 0 14 -8 23 -25 27 -14 3 -25 10
			-25 15 0 6 -12 8 -27 7 -20 -2 -28 2 -31 16 -2 11 -10 25 -17 33 -7 7 -15 18
			-17 24 -2 7 -30 14 -61 17 -31 2 -57 8 -57 12 0 5 -28 11 -62 15 -35 4 -69 12
			-75 17 -9 7 -13 7 -13 -1 0 -6 -11 -11 -25 -11 -14 0 -25 -5 -25 -11 0 -7 -14
			-8 -40 -4 -23 4 -40 3 -40 -3 0 -5 -25 -12 -57 -15 -31 -3 -59 -11 -63 -16 -3
			-6 -25 -12 -48 -13 -49 -2 -82 -27 -82 -64 0 -19 6 -26 30 -30 67 -14 14 -32
			-72 -25 -16 1 -28 -2 -28 -7 0 -5 -8 -12 -17 -15 -10 -2 -27 -8 -38 -12 -11
			-4 -15 -3 -9 2 15 12 13 52 -4 46 -20 -8 -38 25 -36 68 2 45 18 69 45 69 11 0
			19 4 19 9 0 6 63 12 143 15 193 7 207 8 207 18 0 4 13 8 30 8 19 0 33 7 40 19
			11 21 4 51 -12 51 -6 0 -8 6 -5 13 4 10 -3 12 -24 9 -16 -2 -29 0 -29 5 0 6
			-44 13 -97 16 -54 4 -99 11 -101 17 -6 16 -134 12 -156 -5 -11 -9 -41 -15 -68
			-15 -28 0 -48 -5 -48 -11 0 -6 -7 -9 -14 -6 -10 4 -13 1 -9 -9 3 -7 0 -14 -6
			-14 -6 0 -11 -7 -11 -15 0 -21 41 -66 60 -64 40 4 45 -2 20 -21 -14 -11 -30
			-20 -36 -20 -6 0 -17 -7 -24 -15 -7 -8 -21 -15 -30 -15 -10 0 -20 -5 -22 -12
			-3 -7 -32 -14 -74 -16 -38 -3 -78 -11 -89 -18 -23 -16 -61 -18 -70 -4 -4 6 10
			10 34 10 23 0 41 3 41 8 0 4 -19 16 -43 27 -53 25 -62 34 -63 65 -2 42 50 69
			133 71 110 2 123 6 123 40 0 16 -5 29 -11 29 -6 0 -9 6 -6 13 3 7 -3 13 -12
			14 -9 1 -38 5 -64 9 -38 5 -59 2 -95 -14 -26 -11 -59 -25 -74 -31 -35 -13 -36
			-34 -3 -49 32 -15 31 -22 -6 -50 -24 -20 -32 -22 -44 -12 -8 7 -15 17 -15 22
			0 6 -10 24 -22 40 -19 28 -20 31 -5 40 10 5 17 17 17 26 1 21 37 65 66 80 15
			8 39 8 87 -1 87 -14 118 -2 115 45 l-3 33 -80 3 c-64 2 -85 -1 -107 -16 -29
			-19 -88 -99 -88 -119 0 -7 -4 -13 -10 -13 -17 0 -11 58 10 95 11 20 20 42 20
			51 0 8 7 17 15 20 8 4 15 14 15 24 0 16 6 18 35 13 23 -4 35 -2 35 6 0 6 11
			11 23 11 13 0 34 8 45 19 23 19 30 51 11 51 -6 0 -8 7 -5 16 4 9 2 13 -5 8 -6
			-4 -15 -1 -19 6 -4 7 -31 15 -59 18 -28 2 -51 8 -51 13 0 5 -11 9 -25 9 -14 0
			-25 -4 -25 -10z"
			/>
		</G>
	</SVG>
);
